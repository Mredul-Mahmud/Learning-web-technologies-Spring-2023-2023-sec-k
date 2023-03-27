<?php 
    session_start();
?>
<html lang="en">
<head>
    <title>Signup</title>
</head>
<body>
        <form method="POST" action="signupcheck.php" enctype="">
            Id: <input type="id" name="id" value="" /><br>
            Username: <input type="text" name="username" value="" /><br>
            Email: <input type="email" name="email" value="" /> <br>
            Password: <input type="password" name="password" value="" /> <br>
           
            <input type="submit" name="submit" value="Submit" />
        </form>
</body>
</html>