<?php

// isset is used to check variable is set or not 
// if variable is set return 1 else nothing
    $a = 10;
    echo isset($a);


    if(isset($b)){
        echo "<br>B is Set";
    }else{
        echo "<br>B is Not Set";
    }


    //unset() is used to delete variable and its value
    $z = "<br>Akash";
    echo $z; // Print Akash
    unset($z); // Delete
    echo $z; // Error
?>