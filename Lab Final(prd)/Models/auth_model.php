<?php
    require_once "db.php";

    function auth($username, $password)
    {
        $con = getConnection();
        $sql = "select * from Login where username='{$username}' and password='{$password}'";
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);

        if($count == 1){
            return true;
        }else{
            return false;
        }
    }


?>