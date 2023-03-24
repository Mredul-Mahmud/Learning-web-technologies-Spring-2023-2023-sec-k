<?php 
    session_start();
?>
<html>
    <head>
        <title>My Favorites</title>
        <body align= center>
        <form method="POST" action="pa_favappcheck.php" enctype="">
            <h1>Here are your Favorites</h1>
            <li>Add a new appointment</li>
           Appointment No: <input type="text" name="FavAppointment" value="" /><br><br>
            <input type="submit" name="submit" value="Add" /> <br>
            <a href="home.php" target="_blank"> Back</a>

        </body>
    </head>
</html>
