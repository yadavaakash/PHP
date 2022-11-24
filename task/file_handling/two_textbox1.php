<?php
    if(isset($_POST['submit'])){
        $name1 = $_POST['text1'];
        $name2 = $_POST['text2'];
       
        echo $name1,$name2;

        // $filename = $name1;
        // $handle = fopen($filename,"w");
        // fwrite($handle, $name2);
        // fclose($handle);

        $handle = fopen($filename,'r'.'<br>');
        //Read Content.
        $data = fread($handle, filesize($filename));
        //Print Data.
        echo $data;
        // Close File.
        fclose($handle);

        $handle =fopen($filename,'a');
        fwrite($handle,$name2);
        fclose($handle);
 }

?>

<html>
    <body>       
        <form method="post">
                File Name    : <input type="text" name="text1"/>
                Content Name : <input type="text" name="text2"/>
                
                <input type="submit" name="submit" value="submit"/>  
                
        </form>
    </body>
</html>