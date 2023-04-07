<html lang =en>
    <body>
        <table class = "table" border= 1>
</body>
    </html>
<?php 
    session_start();
    require '../Models/products_model.php';
    
    if(isset($_REQUEST['submit'])){
    
        $productinfo= $_REQUEST['sname'];
       

        if($productinfo == ""){
            echo "Product name can not be empty";
        }else{
            
            $status = searchUser($productinfo);
            
            if($status){

                if(mysqli_num_rows($status)>0)
                {
                    echo '
                    <thead>
                    <tr>
                    <th>Name</th>
                    <th>Buying Price</th>
                    <th>Selling Price</th>
                    <th> </th>
                    </tr>
                    </thead>';
                    $row=mysqli_fetch_assoc($status);
                    echo '<tbody>
                    <tr>
                    <td>'.$row['name'].'</td>
                    <td>'.$row['bPrice'].'</td>
                    <td>'.$row['sPrice'].'</td>
                    <td><a href="edit.php"> edit </a> <br> <a href="delete.php"> delete </a> </td>





                    </tr>
                    </tbody>';

                    
                    
                }
                else{
                    echo '<h2>Product not found</h2>';
                }
            }

        }
    }else{
        echo "Something went wrong. Try again";
    }
?>
</table>