<?php 
    session_start();
?>
<html>
    <head>
        <title>My Favorites</title>
        <body>
        <fieldset>
        <legend>ADD PRODUCT</legend>
        <form method="POST" action="../Controllers/productcheck.php" enctype="">
           Name: <input type="text" name="name" value="" /><br><br>
           Buying Price:<input type="text" name="bprice" value="" /><br><br>
           Selling Price:<input type="text" name="sprice" value="" /><br><br>
           <input type="checkbox" name="Display" value="1" /> Display <br><br>
           <input type="submit" name="submit" value="Save" /> <br>
</fieldset>
        </body>
    </head>
</html>
