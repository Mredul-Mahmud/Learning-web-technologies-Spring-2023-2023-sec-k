<?php 
    session_start();
?>
<html>
    <head>
        <title>My Favorites</title>
        <body align= center>
        <form method="POST" action="pa_favlistcheck.php" enctype="">
            <h1>Here are your Favorites</h1>
            <li>Add a new patient information</li>
           Patient Name: <input type="text" name="FavPa" value="" /><br>
           Appointment No: <input type="number" name="pafavno" value="" /><br><br>
            <input type="submit" name="submit" value="Add" /> <br>
            <a href="home.php" target="_blank"> Back</a>

        </body>
    </head>
</html>
