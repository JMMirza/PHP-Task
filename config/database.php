<?php
$servername="localhost";
$username="root";
$password = "";
$dbname="taskpf";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn->connect_error){
    die("Connection Faild: ".$conn->connect_error);
}
?>
