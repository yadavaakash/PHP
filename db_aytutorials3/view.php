<?php
    require './connection/connection.php';

        if(isset($_GET['did'])){

            $deletequery = mysqli_query($connection, "delete from tbl_student where st_id='{$_GET['did']}' ");

        }

    $query = mysqli_query($connection, "select * from tbl_student");

    echo "<table border='1'>";

        echo "<tr>";
            echo "<th>ID</th>";
            echo "<th>Name</th>";
            echo "<th>Gender</th>";
            echo "<th>Mobile</th>";
            echo "<th>Email</th>";
            echo "<th>Password</th>";
            echo "<th>Photo</th>";
            echo "<th>Action</th>";
        echo "</tr>";

        while ($row = mysqli_fetch_array($query)){
            echo "<tr>";
                echo "<td>{$row['st_id']}</td>";
                echo "<td>{$row['st_nane']}</td>";
                echo "<td>{$row['st_gender']}</td>";
                echo "<td>{$row['st_mobile']}</td>";
                echo "<td>{$row['st_email']}</td>";
                echo "<td>{$row['st_password']}</td>";
                echo "<td><a fref='{$row['st_photo']}'><img style='width: 50px; ' src='{$row['st_photo']}'></a></td>";
                echo "<td><a href='edit.php?eid={$row['st_id']}'> Edit </a> | <a href='view.php?did={$row['st_id']}'> Delete </a></td>";
            echo "</tr>";
        }
    echo "<table>";

?>