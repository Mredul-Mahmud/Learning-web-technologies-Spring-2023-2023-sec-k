<?php 
    session_start();
    
    if(isset($_REQUEST['submit']))
    {
        
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];
        $flag = false;

        if($username == "" && $password == "")
        {
            echo "Please enter username/password";
        }
        else
        {

            $file = fopen('user.txt', 'r');
            while(!feof($file))
            {
                $data = fgets($file);
                $user = explode('|', $data);
                if($username == trim($user[0]) && $password == trim($user[3]))
                {
                    $flag = true;
                }
            }
            if($flag & $user[0]= $username)
            {
                if($user[3]= $password)
                {
                    $_SESSION['username'] = $username;
                    $_SESSION['password'] = $password;
               
                fclose($file);
                

                setcookie('flag', 'true', time()+300, '/');
                header('location: home.php');
                }
                
            }
            else
            {
                header('location: userlogin.php?msg=error');
            }
        }
    }
    else
    {
        echo "Something went wrong";
    }
?>