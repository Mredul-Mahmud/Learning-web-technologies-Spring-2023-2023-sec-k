

<?php
session_start();
if(isset($_REQUEST['submit']))
{
    $username= $_REQUEST['username'];
    $password= $_REQUEST['password'];

    $flag= false;
    if( $username=='' || $password == ''){
        echo " <h3 align='center'>Username or Password can not be empty </h3>";
        
    }
    else {
$file = fopen('user.txt','r');
while(!feof($file)){
    $data= fgets($file);
    $user= explode('|', $data);
    if($username==trim($user[0]) && $password == trim($user[3])){
            $flag= true; }
            if($flag){
             $_SESSION['username']= $username;
             $email= $user[1];
             fclose($file);
             $_SESSION['email']=$email;
            setcookie('consumer_logged_flag',true,time()+400,'/');
            if ($_REQUEST['remember']){
                setcookie('consumer_logged_flag',true,time()+10000000000,'/'); 
            }
            header("location:home.php");}
            else{
                    header('location: userlogin.php?msg=error');
                    
            }
}
    }

}
else
{
    echo "<h2 align='center'>Invalid User Request</h2>";
}
?>