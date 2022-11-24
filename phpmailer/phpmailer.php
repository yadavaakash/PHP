<?php
    $to = "akash@akashtechnolabs.com";
    $subject = "Mail Demo";
    $message = "This is My First Mail Demo";

    $q = mail($to, $subject, $message);

    if($q){
        echo "Mail Sent";
    }else{
        echo "Mail Sent";
    }

?>