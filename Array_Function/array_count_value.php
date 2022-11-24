<?php
 $arr = array("C","php","c","android","php","java");
 $newarr = array_count_values($arr);

 foreach($newarr as $key => $value){
    echo "<br>$key - <strong>$value</strong>";
 }
?>