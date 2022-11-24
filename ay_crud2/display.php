<?php
    require './connection/connection.php';

                if(isset($_GET['did'])){
                    $query = mysqli_query($connection, "delete from tbl_student where st_id='{$_GET['did']}' ");

                }

        $query = mysqli_query($connection, "select * from tbl_student");


        echo "<table border='1'>";
            echo "<tr>";
                echo "<td>ID</td>";
                echo "<td>First Name</td>";
                echo "<td>Last Name</td>";
                echo "<td>Number</td>";
                echo "<td>Email</td>";
                echo "<td>Password</td>";
                echo "<td>Address</td>";
                echo "<td>Gender</td>";
                echo "<td>Hobbies</td>";
                echo "<td>Photo</td>";
                echo "<td>Action</td>";
            echo "</tr>";
            
            while ($row = mysqli_fetch_array($query)){
                echo "<tr>";
                    echo "<td>{$row['st_id']}</td>";
                    echo "<td>{$row['st_fname']}</td>";
                    echo "<td>{$row['st_lname']}</td>";
                    echo "<td>{$row['st_number']}</td>";
                    echo "<td>{$row['st_email']}</td>";
                    echo "<td>{$row['st_password']}</td>";
                    echo "<td>{$row['st_address']}</td>";
                    echo "<td>{$row['st_gender']}</td>";
                    echo "<td>{$row['st_hobbies']}</td>";
                    echo "<td><a href='{$row['st_photo']}'><img style='height: 150px; width: 300px; ' src='{$row['st_photo']}'></a></td>";
                    echo "<td><a href='edit.php?eid={$row['st_id']}' >Edit</a> | <a href='display.php?did={$row['st_id']}' >Delete</a></td>";

                echo "</tr>";

            }
            
        echo "</table>";

?>