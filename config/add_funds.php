<?php
// session starting
session_start();
// storing email and bank balance of logged in user in variables
$email=$_SESSION["userEmail"];
$addFunds=$_POST['amount'];
//including database file for database connection
include("database.php");
// check if amount sending is not in negative or empty
if($addFunds>0){
    // adding amount into the account
    $funds = $_SESSION["bankBalance"] + $_POST['amount'];;
    $updateQuery = "update tbl_user set bank_balance = '$funds' where email='$email'";
    $sql = mysqli_query($conn,$updateQuery);
    $_SESSION["bankBalance"]= $funds;
    echo "Successfully added amount";
    header('location:login.php');
}else{
    echo "Add proper amount";
}
?>
