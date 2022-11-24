<?php
    require './connection/connection.php';
    session_start();

        if(isset($_GET['id'])){

            $id = $_GET['id'];
            unset($_SESSION['productcart'][$id]);
            unset($_SESSION['qtycart'][$id]);

        }


        if(isset($_SESSION['productcart']) && !empty($_SESSION['productcart']) ){

            echo "<table align='center' width='70%' >";

                echo "<th>#</th>";
                echo "<th>Title</th>";
                echo "<th>Qty</th>";
                echo "<th>Price</th>";
                echo "<th>Image</th>";

                $i = 0;
                $subtotal = array();
                $grandtotal = array();
                foreach ($_SESSION['productcart'] as $key => $value ){

                    $i++;
                    $productq = mysqli_query($connection, "select * from tbl_productmaster where product_id='{$value}' ");
                    $productdetails = mysqli_fetch_array($productq);

                    $qty = $_SESSION['qtycart'][$key];
                    $subtotaltmp = $productdetails['pro_price'] * $qty;

                    echo "<tr>";

                        echo "<td>$i</td>";
                        echo "<td>{$productdetails['pro_title']}</td>";
                        echo "<td>$qty</td>";
                        echo "<td>{$productdetails['pro_price']}</td>";
                        echo "<td><img src='upload/{$productdetails['pro_imagepath']}' style='width: 50px;'></td>";
                        echo "<td>$subtotaltmp</td>";
                        echo "<td><a href='?id=$key'>Remove</a></td>";
                        
                    echo "</tr>";
                    
                    $grandtotal[] = $subtotaltmp;
                    
                }

                    $finalsum = array_sum($grandtotal);

                echo "<tr>";
                    echo "<td></td>";
                    echo "<td></td>";   echo "<td></td>";   echo "<td></td>";    echo "<td></td>";
                    echo "<td>$finalsum</td>";


                echo "</tr>";

                echo "</table>";
                echo "<a href='product-list.php'>Buy Product</a>";
                
        }else{
            
            echo "Cart is Empty";
            echo "<a href='product-list.php'>Buy Product</a>";
            

        }

        if(isset($_SESSION['studentid'])){

            echo "<a href='shippinginfo.php'>Checkout</a>";            

        }else{

            echo "<a href='login.php'>Please Login to place Order</a>";

        }

        echo "<pre>";

?>