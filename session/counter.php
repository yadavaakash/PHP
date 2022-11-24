<?php
    session_start();
    //Check
    if(isset($_SESSION['user'])){
        $getlodvalue = $_SESSION['user'];
        $_SESSION['user'] = $getlodvalue+1;
        echo "Counter is : ".$_SESSION['user'];
      
    }else{
       
        $_SESSION['user'] = 0;
        echo "Counter is :".$_SESSION['user'];    
           
    }   
    
