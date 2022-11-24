<?php
    $arr = array('c','c++','java','android','php');
    $indexofarray = array_rand($arr,2);
    

    foreach($indexofarray as $key => $value){
        echo "<br> $key -<strong>".$arr[$value]."</strong>";
    }
?>