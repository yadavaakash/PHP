<?php
   if(!isset($_SESSION["no"])){

    $_SESSION["no"] = array();
   }
   if(isset($_POST["txt1"])){
    array_push($_SESSION["no"],$_POST['txt1']);
   }
   for($i=0;$i<4;$i++){
    if(isset($_SESSION["no"][$i])){
        if($_SESSION["no"][$i]!=""){
            print_r( $_SESSION["no"][$i])."<br>";
        }
    }
   }
?>

<html>
    <body>
        <form method="post">
            <input type="text" name="txt1[]">   
            <br>
            <input type="submit" name="submit" value="Submit">  
        </form>
    </body>
</html>