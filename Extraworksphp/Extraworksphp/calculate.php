

<?php
    $a = 50;
    $b = 51;
    $c = 50;
    $d = 50;
    $e = 50;

    $ans = ($a+$b+$c+$d+$e)/5;

    if ($ans < 50) {
                echo "Your Percentage is:- ", $ans, "<br>Your Grade is E";
            }
            else if ($ans >= 50 && $ans < 60) {
               echo "Your Percentage is :- ", $ans, "<br> Your Grade is D";
            }
            else if ($ans >= 60 && $ans < 70) {
                echo "Your Percentage is :- ", $ans, "<br> Your Grade is C";
            }
            else if ($ans >= 70 && $ans < 80) {
                echo "Your Percentage is:- ", $ans, "<br>Your Grade is B";
            }
            else if ($ans >= 80 && $ans < 90) {
                echo "Your Percentage is :- ", $ans, "<br> Your Grade is A";
            }
            else {
               echo "Your Percentage is :- ", $ans, "<br> Your Grade is A+";
    }

?>