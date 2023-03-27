<?php 
    session_start();
?>
<html>
    <head>
        <title>My Favorites</title>
        <body align= center>
        <form method="POST" action="user_favlistcheck.php" enctype="">
            <h1>Here are your Favorites</h1>
            <li>Add a new patient information</li>
           Name: <input type="text" name="favName" value="" /><br>
           Id: <input type="number" name="favId" value="" /><br><br>
           Favorites: <input type="text" name="favorites" value="" /><br>
            <input type="submit" name="submit" value="Add" /> <br>
            <a href="user_home.php" target="_blank"> Back</a>

        </body>
    </head>
</html>
