<?php
    $myarray = array("Football","Baseball","Hockey","Tennis","Boxing");

    shuffle($myarray);
    foreach($myarray as $key => $value){
        echo "<br> $value";
    }
?>