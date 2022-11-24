<?php

    require './connection/connection.php';

    $pid = $_GET['pid'];

    $productq = mysqli_query($connection, "select * from tbl_productmaster where product_id='{$pid}' ");

    $count = mysqli_num_rows($productq);
    if($count<1){
        header("location:product-listning.php");
    }

    $productdetails = mysqli_fetch_array($productq);

    echo "<h3>{$productdetails['pro_title']}</h3>";

    echo "<img style='width:250px;' src='{$productdetails['pro_imagepath']}'>";
    echo "<br/>";
    $oldprice = $productdetails['pro_price'] + 100 ;
    echo " Product Price :- Rs. <del>$oldprice</del> <b> Rs. {$productdetails['pro_price']}</b>  ";
    echo "<br/>";
    echo " Product Details :- {$productdetails['pro_ditails']}";

    $subcategoryq = mysqli_query($connection, "select sub_category_name from tbl_subcategory where sub_category_id='{$productdetails['sub_category_id']}' ");

    $subcategoryrow = mysqli_fetch_array($subcategoryq);

    echo "<br/>Sub Category : {$subcategoryrow['sub_category_name']} ";


?>

    <form method="get" action="cart-process.php">

        <input type="hidden" name="pid" value="<?php echo $pid ?>">
        Qty : <input type="number" name="qty" min="1" max="10">

        <input type="submit" value="Add to Cart">
    </form>