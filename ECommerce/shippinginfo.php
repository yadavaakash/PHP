<?php
    require './connection/connection.php';
    session_start();

    if($_POST){

        $name = $_POST['txt1'];
        $mobile = $_POST['txt2'];
        $address = $_POST['txt3'];
        $stid = $_SESSION['studentid'];
        $currentdate =  date('d-m-Y');


        $ordermaster = mysqli_query($connection, "insert into order_master(order_date, st_id, order_status, shippingname, shippingmobile, shippingaddress) values('{$currentdate}','{$stid}','padding','{$name}','{$mobile}','{$address}')" );

        $orderid = mysqli_insert_id($connection);

        foreach ($_SESSION['productcart'] as $key => $value ){

            $productq = mysqli_query($connection, "select * from tbl_productmaster where product_id='{$value}' ");
            $productdetails = mysqli_fetch_array($productq);
            $qty = $_SESSION['qtycart'][$key];

            $orderdetailsquery = mysqli_query($connection, "insert into order_details (order_id, product_id, product_qty, product_price) values('{$orderid}','{$value}','{$qty}','{$productdetails['pro_price']}' ) ");

        }

        unset($_SESSION['productcart']);
        unset($_SESSION['counter']);
        unset($_SESSION['qtycart']);

        echo "<script>alert('Thanks For Shopping With us!.');window.location='product-list.php';</script>";


    }


?>

<html>
    <body>

            <h1>shipping Info </h1>
        <form method="post">

        Name : <input type="text" name="txt1">
        <br>
        Mobile : <input type="number" name="txt2">
        <br>
        Address : <textarea name="txt3" cols="20" rows="4"></textarea>
        <br>
        <input type="submit" value="Confim Order" >
        </form>
    </body>
</html>