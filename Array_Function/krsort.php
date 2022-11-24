<?php
    $arr = array(
        "Banana" => "Yellow",
        "Apple"  => "Red",
        "Mango"  => "Green"
    
    );
    krsort($arr);
    foreach($arr as $key => $value){
        echo "<br> $key - $value";
    }
?>