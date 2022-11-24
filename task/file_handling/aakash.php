<?php
    $filename = 'aakash.txt';
    // Creat File.
    touch($filename);
    //Add Content into File.
    file_put_contents($filename,"This is My File Data <br>");
    //Read Content From File.
    echo file_get_contents($filename);

    if(file_exists($filename)){
        echo "File Is Present <br>";
    }else{
        echo "File Is Not Present <br>";
    }

    echo "File Size in Bytes ".filesize($filename)."<br>";

    // unlink($filename);
?>