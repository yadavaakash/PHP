<?php

    require './connection/connection.php';

        if(isset($_GET['did'])){

            $deleteq = mysqli_query($connection, "delete from tbl_student where st_id='{$_GET['did']}' ");

        }

        $selectq = mysqli_query($connection, "select * from tbl_student");

        echo "<table border='1'>";

            echo "<tr>";
                echo "<th>ID</th>";
                echo "<th>First Name</th>";
                echo "<th>Last Name</th>";
                echo "<th>Mobile No</th>";
                echo "<th>Email</th>";
                echo "<th>Password</th>";
                echo "<th>Address</th>";
                echo "<th>Gender</th>";
                echo "<th>Hobbies</th>";
                echo "<th>Photo</th>";
                echo "<th>Action</th>";
            echo "</tr>";

            while ($row = mysqli_fetch_array($selectq)){

                echo "<tr>";
                    echo "<td>{$row['st_id']}</td>";
                    echo "<td>{$row['st_fname']}</td>";
                    echo "<td>{$row['st_lname']}</td>";
                    echo "<td>{$row['st_mobile']}</td>";
                    echo "<td>{$row['st_email']}</td>";
                    echo "<td>{$row['st_password']}</td>";
                    echo "<td>{$row['st_address']}</td>";
                    echo "<td>{$row['st_gender']}</td>";
                    echo "<td>{$row['st_hobbies']}</td>";
                    echo "<td><img style='width: 50px;'  src='{$row['st_photo']}'></td>";
                    echo "<td><a href='edit.php?eid={$row['st_id']}'>Edit</a> | <a href='display.php?did={$row['st_id']}'>Delete</a> </td>";
                echo "</tr>";

            }

        echo "</table>";

?>