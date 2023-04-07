<?php
session_start();

?>
<html>
<head>
    <title>edit</title>
</head> 
<body>
    <table>

<tr>
    
    <td>
    <fieldset>
    <legend>EDIT PRODUCT</legend>
    <table>
    
       <form action="../controllers/editcheck.php" method="POST">
        
      
        <tr>
            <td>Name:</td>
        </tr>
        <tr>
            <td><input type="text" name="ename" value="<?php echo $_SESSION['name']?>"></td>
        </tr>
        <tr>
            <td>Buying Price:</td>
        </tr>
        <tr>
            <td><input type="number" name="bprice" value="<?php echo $_SESSION['bprice']?>"></td>
        </tr>
        <tr>
            <td>selling Price:</td>
        </tr>
        <tr>
            <td><input type="number" name="sprice" value="<?php echo $_SESSION['sprice']?>"></td>
        </tr>
        <tr>
            <td><hr></td>
        </tr>
        <tr>
            <td>
                <input type="submit" name="submit" value="SAVE">
            </td>
        </tr>
        </form>
    </table>
    </fieldset>
    </td>
</tr>

    </table>
</body>
</html>