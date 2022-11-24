<!-- 10. Take a number and find factorial of that number.  -->
<?php
    $a = 10;
    $fact = 1;
    for($i=1;$i<=$a;$i++){
        echo "factorial is ", $fact , " X " , $i , " = ", $fact *= $i ,"<br>";
    }
?>