<?php
    session_start();
    if($_POST){
        //Get Value From Texbox
        $name = $_POST['txt1'];
        // Store Value in Session
        $_SESSION['user']= $name;

       header("location:home.php");

    }
?>

<html>
    <body>
        <form method="post">
            Name : <input type="text" name="txt1">
            <input type="submit">
        </form>
    </body>
</html>