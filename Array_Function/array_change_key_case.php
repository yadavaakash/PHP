<?php
    $arr = array(
        "Banana" => "Yellow",
        "Apple" => "Red",
        "Mango" => "Green"
    );
    $uppercase = array_change_key_case($arr,CASE_UPPER);
    print_r($uppercase);
?>