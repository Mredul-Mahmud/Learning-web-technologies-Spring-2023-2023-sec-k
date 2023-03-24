<?php 
    session_start();
?>
<html>
    <head>
        <title>My Favorites</title>
        <body align= center>
        <form method="POST" action="ph_favlistcheck.php" enctype="">
            <h1>Here are your Favorites</h1>
            <li>Add a new patient information</li>
           Patient Name: <input type="text" name="FavPh" value="" /><br>
           Appointment No: <input type="number" name="phfavno" value="" /><br><br>
            <input type="submit" name="submit" value="Add" /> <br>
            <a href="homeph.php" target="_blank"> Back</a>

        </body>
    </head>
</html>
