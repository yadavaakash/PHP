<?php
    $filename = 'akash.txt';
    //Read Contect.
    $handle = fopen($filename,'r'.'<br>');
    //Read Content.
    $data = fread($handle, filesize($filename));
    //Print Data.
    echo $data;
    // Close File.
    fclose($handle);
 


    // Append Content
    
    //Open File in Various Mode A Append W write R Read.
    $handle = fopen($filename,'a');
    // Add Content.
    fwrite($handle,"This is My File Code <br>");
    //Close File.
    fclose($handle);


    
?>
