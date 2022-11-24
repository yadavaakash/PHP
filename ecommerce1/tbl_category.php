<?php

    require './connection/connection.php';

    if($_POST){

        $category_name = mysqli_real_escape_string($connection, $_POST['category_name']);
        $is_active = mysqli_real_escape_string($connection, $_POST['is_active']);
        

        $query = mysqli_query($connection, "insert into tbl_category(category_name, is_active) 
        values('{$category_name}','{$is_active}')");

        if($query){
            echo "<script>alert('Record Added !');</script>";
        }

    }

?>

<html>
    <body>
        <form method="post">
            Category Name : <input type="text" name="category_name" required="true" placeholder="Enter Category Name">
            <br>
            Is Active : <select name="is_active">
                <option value="1">Yes</option>
                <option value="0">No</option>
            </select>
            <br>
            <input type="submit" value="Add Category">
        </form>
    </body>
</html>