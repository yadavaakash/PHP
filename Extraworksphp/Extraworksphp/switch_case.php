<!-- 21. Take a choice from the user between 1 to 12.if user enter 1 then print January,
       2 then print February and so on...(user swich case) -->
<?php
    $a = 3;
    switch ($a){
        case 1:
            echo "Jannuary";
            break;

        case 2:
            echo "February";
            break;

        case 3:
            echo "March";
            break;

        case 4:
            echo "April";
            break;

        case 5:
            echo "May";
            break;

        case 6:
            echo "June";
            break;

        case 7:
            echo "july";
            break;


        case 8:
            echo "August";
            break;

        case 9:
            echo "September";
            break;

        case 10:
            echo "Octomber";
            break;

        case 11:
            echo "November";
            break;

        case 12:
            echo "December";
            break;
        default :
            echo "Invalid Year";

    }
?>