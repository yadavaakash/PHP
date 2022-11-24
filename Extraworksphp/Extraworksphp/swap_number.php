<!-- 11.	Write a program to swap 2 numbers using third variable. -->
<?php
    $a = 10;
    $b = 20;
    $temp;

    $temp = $a;
    $a = $b;
    $b = $temp;

    echo "A = ",$a,"<br>","B = ",$b;
?>