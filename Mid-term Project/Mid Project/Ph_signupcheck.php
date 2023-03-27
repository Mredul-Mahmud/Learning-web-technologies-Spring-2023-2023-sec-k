<?php 
    session_start();
    
    if(isset($_REQUEST['submit'])){
    
        $username = $_REQUEST['username'];
        $email = $_REQUEST['email'];
        $dateofbirth = $_REQUEST['dob'];
        $password = $_REQUEST['password'];
        

        

        if($username == "" && $email == "" && $dateofbirth == "" && $password == "" ){
            echo "Please enter all the information";
        }else{
            $file = fopen("physician.txt", "a");
            $data = $username."|".$email."|".$dateofbirth."|".$password." \r\n";
            fwrite($file, $data);
            fclose($file);
            header('location: Ph_login.php');
        }
    }else{
        echo "Something went wrong";
    }
?>