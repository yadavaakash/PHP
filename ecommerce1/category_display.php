<?php
    require './connection/connection.php';

    $displayq = mysqli_query($connection,"select * from tbl_category");
    
    echo "<table border='1'>";
            echo "<tr>";
                echo "<th>Category ID</th>";
                echo "<th>Category Name</th>";
                echo "<th>Is Active</th>";
                echo "<th>Current Date</th>";
            echo "</tr>";

        while($row = mysqli_fetch_array($displayq)){

            echo "<tr>";
                echo "<td>{$row['category_id']}</td>";
                echo "<td>{$row['category_name']}</td>";
                echo "<td>{$row['is_active']}</td>";
                echo "<td>{$row['insert_date']}</td>";
            echo "</tr>";

        }

    echo "</table>";

?>