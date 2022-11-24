<?php
    $a = fmod(2022,2);
    echo $a ."<br>";
?>
<!-- //Leap Year Yes Or NOT Leap Year -->
<?php
    if(fmod(2020,4)==0){
        echo "Year is Leap Year";
    }else{
        echo "Year is Not Leap Year";
    }
?>