<?php
session_start();

if(!isset($_SESSION['count'])){
    $_SESSION['count'] = 0;
  
     echo"Counter is". $_SESSION['count'];
}else{
    $count = ++$_SESSION['count'] ;
    echo"Counter is". $_SESSION['count'];
}

?>