<!-- 22. Mak a simple calculator using switch case. -->
<?php
    $a = 50;
    $b = 40;

        $n1 = $a + $b;
        $n2 = $a - $b;
        $n3 = $a * $b;
        $n4 = $a / $b;
        switch($n4){
                case $n1:
                    echo "Addition = ",$a+$b;
                    break;

                case $n2:
                    echo "Subbtraction = ",$a-$b;
                    break;

                case $n3:
                    echo "Multiplication = ",$a*$b;
                    break;

                case $n4:
                    echo "Division =  ",$a/$b;
                    break;

            default :
                echo "Invalid Case";  
                  
    }
?>