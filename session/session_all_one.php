<?php
    session_start();
    //Check
    if(isset($_SESSION['user'])){
        session_destroy(); //Delete All Session
        unset($_SESSION['user']); // Delete Session User
        echo "Session Deleted";
    }else{
        $_SESSION['user'] = "Akash";
        echo "Session is set and Value is".$_SESSION['user'];
    }
?>