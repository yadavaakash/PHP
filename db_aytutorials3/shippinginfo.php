<?php

   session_start();
   
   require './connection/connection.php';

   if($_POST){
    $name = $_POST['name'];
    $number = $_POST['number'];
    $address = $_POST['address'];
    $stid = $_SESSION['studentid'];
    $currentdate = date('d-m-Y');

    $ordermasterq = mysqli_query($connection, "INSERT INTO `order_master`( `order_date`, `st_id`, `order_status`, `shippingname`, `shippingmobile`, `shippingaddress`) 
    VALUES('{$currentdate}','{$stid}','panding','{$name}','{$number}','{$address}')");

    $orderid = mysqli_insert_id($connection);
    foreach($_SESSION['productcart'] as $key => $value){

        $productq = mysqli_query($connection, "select * from tbl_productmaster where product_id='{$value}' ");
                    $productdetails = mysqli_fetch_array($productq);
                    $qty = $_SESSION['qtycart'][$key];

                    $orderdetailsquery = mysqli_query($connection, "insert into order_details (order_id, product_id, product_qty, product_price) 
                     values('{$orderid}','{$value}','{$qty}','{$productdetails['pro_price']}' ) ");    


         }
         
         unset($_SESSION['productcart']);
         unset($_SESSION['counter']);
         unset($_SESSION['qtycart']);
 
         echo "<script>alert('Thanks For Shopping With us!.');window.location='product-listning.php';</script>";


   }

?>
<html>
    <body>
        <h3>Shipping Info</h3>
        <form method="post">
            Name : <input type="text" name="name">
            <br>
            Mobile No : <input type="number" name="number">
            <br>
            Address : <textarea name="address" cols="20" rows="4"></textarea>
            <br>
            <input type="submit" value="Confirm Order">
        </form>
    </body>
</html>