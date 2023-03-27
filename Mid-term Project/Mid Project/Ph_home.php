<?php 
    session_start();
    if(isset($_COOKIE['flag']))
    { 

?>

    <html lang="en">
        <head>
        <title>Home Page </title>
        </head>
        <body>
            <h1>Welcome Home <?php echo $_SESSION['username']?></h1><br><br>
            <h1>What do you want to do?</h1><br><br>
            <a href="Ph_logout.php">logout</a>
        </body>
    </html>

<?php
    }
    else{
        header('location: Ph_login.php');
    }
?>