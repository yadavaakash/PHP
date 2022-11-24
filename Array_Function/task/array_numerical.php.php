<?php
        // Numerical Array
        // Method 1
        $a[0] = 10;
        $a[1] = 20;
        $a[2] = 30.4;
        $a[3] = "C";
        $a[4] = "C++";

        // Method 2 Blank Array/Dynamic Array

        $a[0] = 10;
        $a[0] = 20;
        $a[0] = 30.4;
        $a[0] = "C";
        $a[0] = "C++";

        // Method 
        // Always use This Method to create an Array

        $a = array(10,20,30,40,"C","C++","PHP");

        echo $a[5],"<br>";

        // Print Using Loop While and Dowile...
        echo "<br>";
        echo "<br> Print Using Loop While and Dowile ";
        for($i = 1; $i < count($a); $i++){
                echo "<br>",$a[$i];

        }
        
        //Print Using While Loop...

        $i = 0;
        echo "<br>";
        echo "<br>Print Using While Loop  ";
        while($i<count($a)){
                echo "<br>$a[$i]";
                $i++;
        }


        // Print Using Do... While Loop...
        $i = 0;
        echo "<br>";
        echo "<br> Print  Using  Do... While  Loop...  ";

        do{
                echo "<br>$a[$i]";
                $i++;     
        }while($i<count($a));

        echo "<pre>";
        print_r($a);
        var_dump($a);
        var_export($a);

 ?>