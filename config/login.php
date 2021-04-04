<?php
session_start();
echo nl2br("Successfull loggedin \nFirst name: ".$_SESSION["fname"]." \nLast name: ".$_SESSION["lname"]." \nEmail : " .$_SESSION["userEmail"]. " \nBank Balance: ".$_SESSION["bankBalance"]); 
?>
