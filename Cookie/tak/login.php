<?php
    if(isset($_POST['change'])){
        $color = $_POST['color'];
            setcookie('color',$color, time()+3600);
            if(isset($_COOKIE['color'])){ 
                $_COOKIE['color']=$color;
                echo "".$_COOKIE['color'];
                header("location:task.php");  
            }            
    }
   echo " <a href='logout.php'>Remove</a>";
   ?>

   <html>
    <body style="background: <?php echo $color;?>"> 
        
    </body>
   </html>