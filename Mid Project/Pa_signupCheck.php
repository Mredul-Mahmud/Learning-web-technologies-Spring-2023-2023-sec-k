<?php 
    session_start();
    
    if(isset($_REQUEST['submit'])){
    
        $username = $_REQUEST['username'];
        $email = $_REQUEST['email'];
        $dateofbirth = $_REQUEST['dob'];
        $password = $_REQUEST['password'];
        

        

        if($username == "" && $password == "" && $email == "" && $dateofbirth == ""){
            echo "Null username/password/email/DOB";
        }else{
            $file = fopen("user.txt", "a");
            $data = $username."|".$email."|".$dateofbirth."|".$password." \r\n";
            fwrite($file, $data);
            fclose($file);
            header('location: userlogin.php');
        }
    }else{
        echo "invalid request!";
    }
?>