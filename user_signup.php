<?php 
    session_start();
    if(isset($_REQUEST['msg'])){
        if($_REQUEST['msg'] == 'error'){
            echo "Invalid username/password";
        }
    }
?>
<html lang="en">
<head>
    <title>Login Page</title>
</head>
<body>
        <form method="POST" action="../controllers/user_signupcheck.php" enctype="">
            Id: <input type="id" name="id" value="" /><br>
            Username: <input type="text" name="username" value="" /><br>
            Email: <input type="email" name="email" value="" /><br>
            Password: <input type="password" name="password" value="" /> <br>
            <input type="submit" name="submit" value="Submit" />
            <a href="user_login.php" > Login</a>
        </form>
</body>
</html>