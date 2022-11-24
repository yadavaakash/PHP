<?php
        require './connection/connection.php';

        if($_POST){

            $subcategoryname = mysqli_real_escape_string($connection,$_POST['sub_category_name']);
            $catname = $_POST['catname'];
            $isactive = $_POST['isactive'];

            $insertq = mysqli_query($connection, "insert into tbl_subcategory(sub_category_name, category_id, is_active)
            values('{$subcategoryname}','{$catname}','{$isactive}')");

            if($insertq){
                echo "<script>alert('Record Inserted')</script>";
            }

        }

?>

<html>
    <body>
        <form method="post">
            SubCategory Name : <input type="text" name="sub_category_name" required="true" placeholder="Enter Sub Category Name">
            <br>
                <?php
                    $selectquery = mysqli_query($connection,"select * from tbl_category");

                    echo "Category : <select name='catname'>";
                            while($categoryrow = mysqli_fetch_array($selectquery)){
                                
                                echo "<option value='{$categoryrow['category_id']}'>{$categoryrow['category_name']}</option>";

                            }
                    echo "</select>";
                
            ?>
            <br>
            IsActive : <select name="isactive">
                        <option value="1">Yes</option>
                        <option value="0">No</option>
                    </select>

                    <br>
                    <input type="submit">

        </form>
    </body>
</html>