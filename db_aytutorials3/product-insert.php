<?php

        require './connection/connection.php';

        if(isset($_POST['submit'])){

            $pro_title = mysqli_real_escape_string($connection, $_POST['pro_title']);
            $pro_ditails = mysqli_real_escape_string($connection, $_POST['pro_ditails']);
            $pro_price = mysqli_real_escape_string($connection, $_POST['pro_price']);
            $pro_imagepath = "upload/". $_FILES['pro_imagepath']['name'];
            $sub_category_id = mysqli_real_escape_string($connection, $_POST['sub_category_id']);
            $qty = mysqli_real_escape_string($connection, $_POST['qty']);
            $is_active = mysqli_real_escape_string($connection, $_POST['is_active']);

            $insertq = mysqli_query($connection, "INSERT INTO `tbl_productmaster`(`pro_title`, `pro_ditails`, `pro_price`, `pro_imagepath`, `sub_category_id`, `qty`, `is_active`, `is_delete`) 
            VALUES('{$pro_title}','{$pro_ditails}','{$pro_price}','{$pro_imagepath}','{$sub_category_id}','{$qty}','{$is_active}','0') ");

                if($insertq){

                  $fileupload =  move_uploaded_file($_FILES['pro_imagepath']['tmp_name'], $pro_imagepath);

                  if($fileupload){

                    echo "<script>alert('Record Added');</script>";

                  }

                }


        }


?>

<html>
    <body>
        <form method="post" enctype="multipart/form-data">
            <h1>Product Insert</h1>
            Product Name : <input type="text" name="pro_title" placeholder="Enter Product Name">
            <br>
            Enter Details : <textarea name="pro_ditails" cols="20" rows="3" placeholder="Enter Details"></textarea>
            <br>
            Enter Price : <input type="text" name="pro_price" placeholder="Enter Price">
            <br>
            Image : <input type="file" name="pro_imagepath">
            <br>
            Sub Category : 
                <?php
                    $subcategoryq = mysqli_query($connection, "select * from tbl_subcategory");
                    
                    echo "<select name='sub_category_id'>";

                        while ($subcatrow = mysqli_fetch_array($subcategoryq)){
                            
                            echo "<option value='{$subcatrow['sub_category_id']}'>{$subcatrow['sub_category_name']}</option>";

                        }

                    echo "</select>";
                ?>
            <br>
            Qty : <input type="text" name="qty" placeholder="Enter Qty">
            <br>
            IsActive :  <select name="is_active">
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                        </select>   
            <br>
                <input type="submit" name="submit" value="Add Product">
        </form>
    </body>
</html>