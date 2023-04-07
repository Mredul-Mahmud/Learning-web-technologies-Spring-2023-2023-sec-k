<?php 
    session_start();
    require_once "../Models/products_model.php";
    
    if(isset($_REQUEST['submit']))
    {
        
    
        $name = $_REQUEST['name'];
        $bprice = $_REQUEST['bprice'];
        $sprice = $_REQUEST['sprice'];
        $display = $_REQUEST['Display'];

        if($name == "" && $bprice== "" && $sprice== "" )
        {
            echo "These fields cannot be empty.";
        }else{
            $product = ['name'=> $name,'bPrice'=> $bprice, 'sPrice'=> $sprice];
            $status = addProduct($product);
            if($status)
            {
               
            echo 'Product successfully added';
            header('location:../Views/display.php');
            }
    }
}
    else
    {
        echo "Something went wrong. Try again";
    }
    if($display == 'value1')
    {
        $status=showProducts($product);
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
    }
?>