
<html>
    <head>
       
    </head>
    <body style="background-color:<?php
    if(isset($_POST['color'])){
      setcookie('color','change',time()+3600);
      $_COOKIE['color'];
      header("location:login.php");
    }
        
      echo  $color;
        
    ?>"
    >

       <form method="post" action="login.php">
        <input type="text"  name="color">
        <input type="submit" name="change"  >
       </form>
    </body>
</html>