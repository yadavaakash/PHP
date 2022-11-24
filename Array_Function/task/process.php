<?php
    $name = $_POST["text1"];
    $age = $_POST["text2"];

    echo "My Name is $name and Age is $age";

    echo "<table border='1'>";
        for($i = 1; $i < $age; $i++){
            echo "<tr>";
                echo "<td> $i </td>";
                if($i % 2 == 0){
                    echo "<td style='background-color:pink;'>$name </td>";
                }
                else{
                    echo "<td style='background-color:blue; color:white;'>$name </td>";
                }
                echo "<td>Happy Birthday</td>"; 
            echo "</tr>";
        }
    echo "</table>";
?>