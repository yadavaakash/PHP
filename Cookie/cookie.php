<?php
//Cookie Create
setcookie("admin","akash");
//Creat With Time
setcookie("user","php",time()+ 3600);
//Print 
echo " Cookie ". $_COOKIE['admin'];
//Check
 if(isset($_COOKIE['admin'])){
    echo " Cookie is Set ";
 }
// setcookie("admin","",time()-1);
?>