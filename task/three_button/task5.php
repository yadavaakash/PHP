<?php
    if(isset($_POST['sin'])){
        $name = $_POST['text1'];
        echo sin($name);
    }
    if(isset($_POST['cos'])){
        $name = $_POST['text1'];
        echo cos($name);
    }
    if(isset($_POST['tan'])){
        $name = $_POST['text1'];
        echo tan($name);
    }
?>

<html>
    <body>
        <form method="post">
            Enter No1. <input type="number" name="text1" />
            
            <input type="submit" name="sin" value="Sin" />
            <input type="submit" name="cos" value="Cos" />
            <input type="submit" name="tan" value="Tan" />

        </form>
    </body>
</html>