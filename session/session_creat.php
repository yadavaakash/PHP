<?php
    // Session is Global Variable Which is used to pass data from one page to multiple page
    // session Stores Values in Browser in if you close browser session value will get expire

    session_start();
    //CreateSession Variable 

    $_SESSION['admin'] ="Akash";
    $_SESSION['user']  = "PHP";
    //Print Session Variable Value
    echo "Session Variable is " .$_SESSION['admin'];
    echo "<pre>";
    print_r($_SESSION);
?>