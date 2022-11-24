<?php

    if(isset($_POST['submit'])){
        $color = $_POST['txt1'];
        setcookie("color",$color,time()+3600);
        header("location:akash_home.php"); 
    }elseif(isset($_POST['out'])) // logout button pr click thase tyare
    {
         setcookie("color","",time()-1);
         header("location:akash_html.php");
    }else {
          header("location:akash_html.php"); 
    }

?>