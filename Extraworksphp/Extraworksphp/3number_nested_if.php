<!-- 16. Take 3 numbers and find greatest number using nested IF….ELSE statement. -->
<?php
    $a = 100;
    $b = 20;
    $c = 30;

    if($a>$b && $a>$c || $b>$a && $b>$c){
        if($b>$a && $b>$c){
            echo "B is Greatest Number";
        }else{
            echo "A is Greatest Number";
        }    
    }else{
        echo "C is Greatest Number";
    }
?>