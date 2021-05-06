<?php
class operations{
    public $conn = null;
    //constructor to build connection
    function __construct(){
        $servername="localhost";
        $username="root";
        $password = "";
        $dbname="taskpf";

        $this->conn = mysqli_connect($servername,$username,$password,$dbname);
        // // Create database
        // $sql = "CREATE DATABASE taskpf";
        // if ($this->conn->query($sql) === TRUE) {
        //     echo "Database created successfully";
        // } else {
        // echo "Error creating database: " . $conn->error;
        // }
    }

    // function to check dublicate email address
    public function checkDubUser($fname,$lname,$email,$password){
        
        $queryEmail = mysqli_query($this->conn,"select email from tbl_user where email='$email'");
        
        $checkEmail= mysqli_num_rows($queryEmail);
        
        if($checkEmail>0){
            echo "Email already exists";
        }
        else{
            
            $this->createUser($fname,$lname,$email,$password);
        }
        
    }


    // function to create user
    public function createUser($fname,$lname,$email,$password){
        $sql="insert into tbl_user(first_name, last_name, email, password) values('$fname','$lname','$email','$password')";
        $result= mysqli_query($this->conn,$sql);
        if ($result!=null){
            echo"user created";
            return 1;
        }else{
            die('error ' .mysqli_error($this->conn));
            return 0;
        }
    }

    // function to validate first and last name
    public function setUser($fname,$lname,$email,$password){
        
        if (!preg_match("/^[a-zA-Z-' ]*$/",$fname) or !preg_match("/^[a-zA-Z-' ]*$/",$lname)) {
            echo "Only letters and white space allowed in first and last name";
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Invalid email format";
          }
        else{
            $this->checkDubUser($fname,$lname,$email,$password);
        } 
    }
}
?>
