<?php 
    session_start();
    require_once "../models/auth_model.php";

    if(isset($_REQUEST['submit'])){
    
        $id = $_REQUEST['id'];
        $username = $_REQUEST['username'];
        $email = $_REQUEST['email'];
        $password = $_REQUEST['password'];

        if($id == "" && $username == "" && $email == "" && $password == ""){
            echo "Kindly enter id/username/password/email";
        }else{
            $user = ['id'=> $id,'username'=> $username, 'email'=> $email, 'password'=> $password;
            $status = addUser($user);
            if($status){
                header('location: user_login.php');
            }else{
                echo " Something went wrong in db, try again";
            }
        }
    }else{
        echo "invalid request!";
    }
?>