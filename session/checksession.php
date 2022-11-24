<?php
    session_start();

    if(isset($_SESSION['admin'])){
        echo "Session is Set";
    }else{
        echo "Session is Not Set";
    }
?>