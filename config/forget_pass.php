<?php
include("database.php");
session_start();
//getting current email of user
$user=$_SESSION["userEmail"];
if(isset($_POST['email']) !=''){
    $userName= $_POST['email'];
    if($user==$userName){
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $emailQuery = "select * from tbl_user where email ='$email'"; 
        $sql = mysqli_query($conn, $emailQuery);
        $emailcount = mysqli_num_rows($sql);
        $newPass='';
        if($emailcount){
            $newPass=uniqid();
            echo "your new password for  ".$userName. " is: " .$newPass;
            $updateQuery = "update tbl_user set password = '$newPass' where email='$userName'";
            $sql = mysqli_query($conn,$updateQuery);
        }
    }
    else{
        echo "Please enter your email address";
    }



}else{
    echo "enter valid email";
}
?>
