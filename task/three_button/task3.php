<?php
   if(isset($_POST['random'])){
    echo rand();
   }
?>

<html>
    <body>
        <form method = "post">
        Random : <input type="submit" name="random" value="random" />
        </form>
    </body>
</html>