<?php

if(isset($_POST['button1'])){
    $name = $_POST['txt1'];
    session_start();
    if($_SESSION['user']=$name){
        echo "<br> Set Value Seccess Fully ";
       
    }else{
        echo "<br>Not Set Value Seccess Fully ";
    }
    return false;
}
if(isset($_POST['button2'])){
        $name = $_POST['txt1'];

        session_start();
    if($_SESSION['user']=$name){
        echo "Hi..." .$_SESSION['user'] ; 
        return false;
    } 
    
}
if(isset($_POST['button3'])){
    session_start();
    session_destroy();
    return false;
}

?>
<html>
    <body>
        <form method="post">
            Name : <input type="text" name="txt1">
            <input type="submit" name="button1" value="Set">
            <input type="submit" name="button2" value="Get">
            <input type="submit" name="button3" value="Remove">
        </form>
    </body>
</html>