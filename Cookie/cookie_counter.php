<?php
  
if(isset($_COOKIE['user'])){
     $count = $_COOKIE['user']+1;
    setcookie('user',$count,time()+3600);
    $_COOKIE['user'] = $count;
    echo "Cookie is Counter".$_COOKIE['user'];
}else{
  
    setcookie('user',"0");
     $_COOKIE['user'];
}

    
?>