<?php
if(isset($_POST['submit']))// submit button pr click thase tyare
{
    $color = $_POST['txt1']; 
    setcookie("color",$color,time()+3600);                
    header("location:home.php"); 
                                      
}elseif(isset($_POST['out'])) // logout button pr click thase tyare
{
     setcookie("color","",time()-1);
     header("location:cookie_html.php");
}else {
      header("location:cookie_html.php"); 
}

?>