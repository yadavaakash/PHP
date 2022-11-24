<?php
    require './connection/connection.php';

    if($_GET){
        $did = $_GET['did'];
        $deleteq = mysqli_query($connection,"delete from tbl_subcategory where sub_category_id='{$did}' ");

    }

    $subcatdisplayq = mysqli_query($connection,"select * from tbl_subcategory");

    echo "<table border='1'>";

            echo "<tr>";
                echo "<th>Sub Category ID</th>";
                echo "<th>Sub Category Name</th>";
                echo "<th>Category ID</th>";
                echo "<th>Is Active</th>";
                echo "<th>Current Date</th>";
                echo "<th>Action</th>";
            echo "</tr>";

        while($subcatdisplayrow = mysqli_fetch_array($subcatdisplayq)){
            echo "<tr>";
                echo "<td>{$subcatdisplayrow['sub_category_id']}</td>";
                echo "<td>{$subcatdisplayrow['sub_category_name']}</td>";
                echo "<td>{$subcatdisplayrow['category_id']}</td>";
                echo "<td>{$subcatdisplayrow['is_active']}</td>";
                echo "<td>{$subcatdisplayrow['insert_date']}</td>";
                echo "<td><a href='sub_category_edit.php?eid={$subcatdisplayrow['sub_category_id']}'>Edit</a> | <a href='subcategory_display.php?did={$subcatdisplayrow['sub_category_id']}'>Delete</a></td>";
            echo "</tr>";
        }

    echo "</table>";

?>