<html lang =en>
    <body>
        <table class = "table" border= 1>
</body>
    </html>
<?php
session_start();

require_once '../models/products_model.php';

    $status=showproducts($product);
    if($status){
        if(mysqli_num_rows($status)>0){
            echo '<thead>
            <tr>
            <th>Name</th>
            <th>Buying Price</th>
            <th>Selling Price</th>
            <th></th>
             </tr>
            </thead>';
            $status=showproducts($product);
            $row=mysqli_fetch_assoc($status);
            echo '<tbody>
            <tr>
            <td>'.$row['name'].'</td>
            <td>'.$row['bPrice'].'</td>
            <td>'.$row['sPrice'].'</td>
    
    
            </tr>
            </tbody>
            </table>
            </html>';
    
    
        }
    }
    
 ?>



