<?php 
    session_start();
?>
<html>
    <head>
        <title>My Favorites</title>
        <body align= center>
        <form method="POST" action="appointmentsearchcheck.php" enctype="">
            <h1>Search for appointment</h1>
           Appointment no.: <input type="text" name="appointmentno" value="" /><br>
            <input type="submit" name="submit" value="Search" /> <br>
            <a href="home.php" target="_blank"> Back</a>

        </body>
    </head>
</html>
