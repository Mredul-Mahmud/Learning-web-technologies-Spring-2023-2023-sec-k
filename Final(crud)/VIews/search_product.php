<?php 
    session_start();
?>
<html>
    <head>
        <title>My Favorites</title>
        <body>
        <fieldset>
        <legend>SEARCH PRODUCT</legend>
        <form method="POST" action="../Controllers/search_productcheck.php" enctype="">
           Search by name: <input type="text" name="sname" value="" /><br><br>
           <input type="submit" name="submit" value="Save" /> <br>
</fieldset>
        </body>
    </head>
</html>
