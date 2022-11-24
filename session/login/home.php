<?php
    session_start();
        echo " Hi...  " . $_SESSION['user'];

        if(!isset($_SESSION['user'])){
            header("location:login.php");
        }

   echo " <a href='logout.php'>Logout</a> ";
?>