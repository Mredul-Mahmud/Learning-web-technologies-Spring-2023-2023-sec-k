<?php 
    session_start();
?>
<html>
    <head>
        <title>Delete</title>
        <body>
        <fieldset>
        <legend>DELETE PRODUCT</legend>
        <form method="POST" action="../Controllers/deletecheck.php" enctype="">
           Search by name: <input type="text" name="pname" value="" /><br><br>
           <input type="submit" name="submit" value="Delete this item" /> <br>
</fieldset>
        </body>
    </head>
</html>
