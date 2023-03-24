<?php 
    session_start();
    
    if(isset($_REQUEST['submit']))
    {
        
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];
        $flag = false;

        if($username == "" && $password == "")
        {
            echo "Null username/password";
        }
        else
        {

            $file = fopen('physician.txt', 'a');
            while(!feof($file))
            {
                $data = fgets($file);
                $user = explode('|', $data);
                if($username == trim($user[0]) && $password == trim($user[3]))
                {
                    $userdata['username'] = trim($user[0]);
					$userdata['password'] = trim($user[3]);
					$userdata['email'] = trim($user[1]);
					$userdata['dob'] = trim($user[2]);
                    $_SESSION['userdata'] = $userdata;
                    setcookie('saus', 'true', time()+300, '/');
                    header('location: homeph.php');
                }
                 
            else
            {
                header('location: Ph_login.php?msg=error');
            }
            }
           
        }
    }
    else
    {
        echo "Something went wrong";
    }
?>