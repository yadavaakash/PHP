<?php
    $arr = array(0 => "Sunday", 1 => "Monday", 2 => "Tuesday");
    $arr2 = array(3 => "Tuesday", 4 => "Sunday", 5 => "Thursday");

    print_r(array_intersect($arr,$arr2));
?>