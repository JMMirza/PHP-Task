<?php
session_start();
echo nl2br("Successfull Transfered into: ".$_SESSION["recieverEmail"]."\nYour account information is \nFirst name: ".$_SESSION["fname"]." \nLast name: ".$_SESSION["lname"]." \nEmail : " .$_SESSION["userEmail"]. " \nBank Balance: ".$_SESSION["bankBalance"]); 
?>
