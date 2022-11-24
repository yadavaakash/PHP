<?php
    $myfile = "myfile.txt";
    $encrtypedContents = sha1_file($myfile);
    echo $encrtypedContents;
?>