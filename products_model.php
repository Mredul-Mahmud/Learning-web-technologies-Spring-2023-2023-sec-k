<?php
    require_once "db.php";
    function addProduct ($product){
        $con = getConnection();
        $sql = "insert into allproducts values('{$product['name']}','{$product['bPrice']}', '{$product['sPrice']}')";
        $status = mysqli_query($con, $sql);
        return $status;
    }

    function searchUser($productinfo){
        $con = getConnection();
        $sql = "Select * from allproducts where name ='$productinfo' or bPrice = '$productinfo'";
        $status = mysqli_query($con, $sql);
        return $status;
        

    }

    function deleteUser($name){
        $con = getConnection();
        $sql = "remove * from allproducts where name ='$name'";
        $status = mysqli_query($con, $sql);
        return $status;

    }

    function showproducts($product){
        $con = getConnection();
        $sql = "select * from allproducts where name ='$product'";
        $status = mysqli_query($con, $sql);
        return $status;
    }
    function editproduct ($products){
        $con = getConnection();
        
        $sql = "UPDATE allproducts
        SET Name = '{$products['name']}', bPrice = '{$products['bprice']}', sPrice ='{$products['sprice']}', profit ='{$products['profit']}'
        WHERE name = '{$products['name']}';";

        $status = mysqli_query($con, $sql);
       
        return $status;
    }


?>