<?php

require './connection/connection.php';

if($_POST){
    $catname = $_POST['catname'];
    $sname = mysqli_real_escape_string($connection, $_POST['sname']);
    $isactive = $_POST['isactive'];

    $insertquery = mysqli_query($connection, "insert into tbl_subcategory(sub_category_name, category_id, is_active) values('{$sname}','{$catname}','{$isactive}')") or die(mysqli_error($connection));

    if($insertquery){
        echo "<script>alert('Record Inserted')</script>";
    }


}

?>


<html>
    <body>
        <form method="post">
            subCategoryName : <input type="text" name="sname" required="true" placeholder="Enter Sub Category" >
            <br>
                <?php
                    $selectquery = mysqli_query($connection, "select * from tbl_category ") or die (mysqli_error($connection));

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