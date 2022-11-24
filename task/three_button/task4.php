<?php
    if(isset($_POST['adistion'])){
        $name1 = $_POST['text1'];
        $name2 = $_POST['text2'];

        $sum = $name1 +$name2;
        echo  "Sum is $sum";
    }
    if(isset($_POST['subtraction'])){
        $name1 = $_POST['text1'];
        $name2 = $_POST['text2'];

        $sum = $name1 - $name2;
        echo  "Sum is $sum";
    }
    if(isset($_POST['multiplication'])){
        $name1 = $_POST['text1'];
        $name2 = $_POST['text2'];

        $sum = $name1 * $name2;
        echo  "Sum is $sum";
    }
    if(isset($_POST['devision'])){
        $name1 = $_POST['text1'];
        $name2 = $_POST['text2'];

        $sum = $name1 / $name2;
        echo  "Sum is $sum";
    }
?>

<html>
    <body>
        <form method="post">
            
            Enter No1: <input type="number" name="text1">
            Enter No2: <input type="number" name="text2">
            

            <input type="submit" name ="adistion" value="adistion">
            <input type="submit" name ="subtraction" value="subtraction">
            <input type="submit" name ="multiplication" value="multiplication">
            <input type="submit" name ="devision" value="devision">
        </form>
    </body>
</html>