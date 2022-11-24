<?php

require './connection/connection.php';


    $subcategoryquery = mysqli_query($connection, "select * from tbl_subcategory");

    while($subcatrow = mysqli_fetch_array($subcategoryquery)){

        echo "<a href='product-listning.php?scatid={$subcatrow['sub_category_id']}' >{$subcatrow['sub_category_name']}</a> | ";

    }

    ?>
        
        <form method="get">
        <br>
            Search : <input type="text" name="search">
            <input type="submit" value="Search">

        </form>

        <form method="get">
        
            Start Price : <input type="number" name="price1">
            End Price : <input type="number" name="price2">
            <input type="submit" value="Search">

        </form>



    <?php

        if(isset($_GET['scatid'])){
            $subcatid = $_GET['scatid'];

            $productselectquery = mysqli_query($connection, "select * from tbl_productmaster where sub_category_id='{$subcatid}' ");

        }else if(isset($_GET['search'])){

            $search = $_GET['search'];

            $productselectquery = mysqli_query($connection, "select * from tbl_productmaster where pro_title like '%$search%' ");

        }
        else if(isset($_GET['price1']) && isset($_GET['price1'])){

            $price1 = $_GET['price1'];
            $price2 = $_GET['price2'];

            $productselectquery = mysqli_query($connection, "select * from tbl_productmaster where pro_price between $price1 and $price2 ");

        }
        else{

            $productselectquery = mysqli_query($connection, " select * from tbl_productmaster ");

        }

        $count = mysqli_num_rows($productselectquery);

        if($count<1){
            echo "<br/>No Record Found";
        }else{
            echo "<br/>$count Record Found";
        }

    

    while($productrow = mysqli_fetch_array($productselectquery)){
       
        echo "<br/><br/>". $productrow['pro_title'];
        echo "<br/>". $productrow['pro_price'];
        echo "<br/><img style='width:100px;' src='{$productrow['pro_imagepath']}'>";


        echo "<br/><br/><a href='product-ditails.php?pid={$productrow['product_id']}'>Details</a>";
       

    }

?>