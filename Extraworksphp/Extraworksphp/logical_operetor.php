<!-- 17. Take 3 numbers and find smallest number using logical operator. -->
<?php
    $a = 10;
    $b = 20;
    $c = 30;

    if($a<$b && $a<$c){
        echo "A is Smallest Number";
    }
    else if($b<$a && $b<$c){
        echo "B is smallest Number";
    }
    else{
        echo "C is Smallest Number";
    }
?>