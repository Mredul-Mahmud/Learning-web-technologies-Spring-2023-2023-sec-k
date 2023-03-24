<?php 
    session_start();
?>
<html lang="en">
<head>
    <title>Signup</title>
</head>
<body align='center'>
        <h1> Welcome to sign up</h1>
        <form method="POST" action="Pa_signupCheck.php" enctype="">
            Username: <input type="text" name="username" value="" /><br><br>
            Email: <input type="email" name="email" value="" /> <br><br>
            Date of Birth: <input type="date" name="dob" value="" /> <br><br>
            Password: <input type="password" name="password" value="" /> <br><br>
           
            <input type="submit" name="submit" value="Signup" /><br><br>
             <a href='homep.html'>Back</a>;<br><br>
             <li> Already have an account?</li>
            <a href="userlogin.php" target="_blank"> Log in instead</a>         
            
            
        </form>
</body>
</html>

