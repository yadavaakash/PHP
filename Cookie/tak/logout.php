<?php 
        if(isset($_COOKIE['color'])){
            setcookie('color','change', time()-1);
           
        }  
        header("location:task.php");        
?>

