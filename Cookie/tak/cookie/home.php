<?php 
        if(isset($_COOKIE["color"]))  
            // cheack karyu k cookie ma value che k nathi
        {
            $color = $_COOKIE["color"];
            // value hoy to $color name na variable ma store thai jaay.
        }
?>
<html>
    <head>
        <title>HOME</title>
    </head>
     <body style="background-color: <?php echo $color ?>">
     <center><h1>HOME PAGE </h1></center>
     <form action="cookie.php" method="post">
     <button type="submit" name="out" >LOGOUT </button>
     </form>
    </body>
</html>
