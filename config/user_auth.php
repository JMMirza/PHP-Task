<?php
session_start();
include("database.php");

if(isset($_POST['username']) and isset($_POST['password']) !=''){
    $email=$_POST['username'];
    $password=$_POST['password'];
    $getEmail = "SELECT * FROM tbl_user WHERE email='$email'";

    $email_query = mysqli_query($conn, $getEmail);
    $checkEmail= mysqli_num_rows($email_query);
    $userId ='';
    $firstName='';
    $lastName='';
    $bankBalance='';
    if($checkEmail){
        $email_pass=mysqli_fetch_assoc($email_query);
        $userPass=$email_pass['password'];
        $firstName = $email_pass['first_name'];
        $lastName = $email_pass['last_name'];
        $bankBalance = $email_pass['bank_balance'];
        
        $_SESSION["userEmail"]=$email;
        $_SESSION["fname"]=$firstName;
        $_SESSION["lname"]=$lastName;
        $_SESSION["bankBalance"]=$bankBalance;
        if($userPass==$password){
            header('location:login.php');
        }else{
            echo "password doesnot match";
        }
    }else{
        echo"invalid email";
    }

}else{
    
    $response["message"] = "Enter Correct email";
}

?>
