<?php
    if(isset($_POST['submit'])){
        $name1 = $_POST['text1'];
        $name2 = $_POST['text2'];

        echo $name1,$name2;

        $filename = $name1;
        touch($filename);
        file_put_contents($filename,$name2);
        echo file_get_contents($filename);

        if(file_exists($filename)){
            echo "File is Present";
        }else{
            echo "File is Not Present";
        }

        echo "File Size in Byte".filesize($filename);

        // echo unlink($filename);
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