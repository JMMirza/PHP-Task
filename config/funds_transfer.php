<?php
session_start();
//getting sender email
$email=$_SESSION["userEmail"];
//including database file for database connection
include("database.php");

//checking where the input email of reciever and amount to be send is empty or not 
if(isset($_POST['email']) and isset($_POST['amount']) !=''){
    //storing email and amount in variables
    $receiverEmail= $_POST['email'];
    $sendMoney = $_POST['amount'];
    // Query to check whether the receiver email exits in our db or not
    $emailQuery = mysqli_query($conn,"select * from tbl_user where email ='$receiverEmail'"); 
    $emailcount = mysqli_num_rows($emailQuery);
    // stroing sender bank balnce into a variable
    $senderBalance= $_SESSION["bankBalance"];
    // deducting amount from sender's bank balance
    $remainingAmount= $senderBalance-$sendMoney;
    // condition runs if they found data in db
    if($emailcount){
        // condition that sending money is enough or not
        if($_SESSION["bankBalance"]>$sendMoney){
            // updating amount in sender bank balance
            $updateQuery = "update tbl_user set bank_balance = '$remainingAmount' where email='$email'";
            $sql = mysqli_query($conn,$updateQuery);
            // updating session value
            $_SESSION["bankBalance"] = $remainingAmount;
            
            // feteching info about reciever 
            $email_pass=mysqli_fetch_assoc($emailQuery);
            //storing reciever bank balance into a variable
            $receiverBalance=$email_pass['bank_balance'];
            // adding amount into reciever bank account
            $bankBalance =  $receiverBalance+ $sendMoney;
            $updateRecQuery = "update tbl_user set bank_balance = '$bankBalance' where email='$receiverEmail'";
            $sql = mysqli_query($conn,$updateRecQuery);
            header('location:login.php');

        }else{
            // if amount is greater than your bank balance
            echo "amount is greater than your bank balance";
        }
        
    }else{
        // if email not found
        echo "email not found";
    }
    
    
}else{
    // if you do not fill all fields
    echo "fill all fields";
}
?>
