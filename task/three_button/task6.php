<?php
        if(isset($_POST['button'])){
            $name = $_POST['text1'];

        if($name%4 == 0){
            echo "Leap Year";
        }
        else{
            echo "Not a Leap Year";
        }
    } 

?>

<html>
    <body>
        <form method="post">
            Enter No. <input type="number" name="text1" />

            <input type="submit" name="button" value="button" />
        </form>
    </body>
</html>