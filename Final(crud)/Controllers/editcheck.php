<?php 
require_once '../models/products_model.php';
    session_start();
    if(isset($_REQUEST['submit'])){

        $name = $_REQUEST['name'];
        $buyingprice = $_REQUEST['buyingprice'];
        $sellingprice = $_REQUEST['sellingprice'];
        $profit = $sellingprice-$buyingprice;

        if(empty($name)||empty($buyingprice)||empty($sellingprice)) {
            echo "Null value ..";
            
        }
        else
        {
            $products = ['name'=> $name,'bPrice'=> $bprice, 'sPrice'=> $sprice];
            $status = editproduct($products);
                if($status){
                 $_SESSION['name']= $name;
                $_SESSION['bPrice']= $bprice;
                $_SESSION['sPrice']= $sprice;
                 header('location: ../views/display.php');                      
                }else{
                     echo "DB error, try again";
                    }

        }   
}
    else{
        echo "invalid request...";
    }
?>