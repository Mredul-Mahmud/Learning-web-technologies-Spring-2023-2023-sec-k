<?php 
    session_start();
?>
<html>
    <head>
        <title>My Favorites</title>
        <body align= center>
        <form method="POST" action="ph_searchcheck.php" enctype="">
            <h1>Search for articles</h1>
            <li>Search Article by serial number</li>
           Article Serial: <input type="text" name="articleno" value="" /><br>
            <input type="submit" name="submit" value="Search" /> <br>
            <a href="home.php" target="_blank"> Back</a>

        </body>
    </head>
</html>
