<!-- 13. Take a number check if a number is less than 100 or not. If it is less than 100 then check if it is odd or even.
     document.write("<h1>Take a number check if a number is less than 100 or not. If it is less than 100 then check if it is odd or even.</h1>");
      -->
<?php
    $a = 10;

    if($a<=100){
        echo "Yes Number is Less  Than 100<br>";
        if($a==100 || $a%2==0){
            echo "Even Number";
        }else {
            echo "Odd Number";
        }
    }else{
        echo "Number is Greater than 100";
    }
?>