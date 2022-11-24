<!-- 19. Take a number and calculate sum of natural numbers. -->
<?php
    $a = 5;
    $ntrno = 0;
    for($i=1;$i<=$a;$i++){
        $ntrno +=$i;
        echo $ntrno -$i ," + ",$i, " = ",$ntrno,"<br>";
    }
?>