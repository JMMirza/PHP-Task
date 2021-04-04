<?php
//including database and creation function file for database connection and create user.
require_once("../config/operations.php");
$response = array();
if($_SERVER['REQUEST_METHOD'] == "POST"){
    // if fields are not empty
    if(isset($_POST['first_name']) and isset($_POST['last_name']) and isset($_POST['email']) and isset($_POST['password']) != ''){
        // object created named as user
        $user = new operations();
        // sending data to the function setUser with parameters.
        $result = $user->setUser($_POST['first_name'],$_POST['last_name'],$_POST['email'],$_POST['password']);
        // if($result==1){
        //     // echo "successfully created a user";
        //     $response['error']=false;
        //     $response['message']="Successfully user created";
        // }else{
        //     // echo "user cannot created";
        //     $response['error']=true;
        //     $response['message']="user cannot created";
        // }

    }else{
        echo "fill all fields";
        $response['error']=true;
        $response['message']="fill all fields";
    }
}else{
    echo "request cannot be granted";
    $response['error']=true;
    $response['message']="request cannot be granted";
}
// print_r($response);
?>
