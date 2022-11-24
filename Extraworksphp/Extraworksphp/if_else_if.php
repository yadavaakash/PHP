<!-- 15. Take a number and check whether it is zero, positive or negative using nested IF…ELSE statement. -->
<?php
   $a = 1;
   if($a>=0){
        if($a == 0){
            echo "Zero";
        }else{
            echo "Positive";
        }
   }else{
        echo "Negative";
   }
?>