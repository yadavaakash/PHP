<?php
    require './connection/connection.php';

    
        $eid = $_GET['eid'];

        $selectquery = mysqli_query($connection,"select * from tbl_subcategory where sub_category_id='{$eid}' ");
        $row = mysqli_fetch_array($selectquery);

    if($_POST){

        $subcatname = $_POST['subcatname'];
        $catid = $_POST['catid'];
        $isactive = $_POST['isactive'];

        $updateq = mysqli_query($connection, "update tbl_subcategory set sub_category_name='{$subcatname}', category_id='{$catid}',is_active='{$isactive}' where sub_category_id='{$eid}' ");

        header("location:subcategory_display.php");


    }

?>

<html>
    <body>
        <form method="post">
            SubCategory Name : <input type="text" name="subcatname" value="<?php echo $row['sub_category_name'] ?>" required="true" placeholder="SubCategory Name">
            <br>
            Category ID : <input type="text" name="catid" value="<?php echo $row['category_id'] ?>" >
            <br>
            IsActive : <select name="isactive" value="<?php echo $row['is_active'] ?>">
                        <option value="1">Yes</option>
                        <option value="0">No</option>
                    </select>
            <br>
            <input type="submit" value="Edit Record">
        </form>
    </body>
</html>