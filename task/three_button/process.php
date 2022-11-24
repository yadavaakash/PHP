<?php
    
  if(isset($_POST['binary'])){
        $name = $_POST['text1'];
        echo decbin($name) ;
  }
  if(isset($_POST['decimal'])){
    $name = $_POST['text1'];
    echo bindec($name) ;
}
if(isset($_POST['oct'])){
    $name = $_POST['text1'];
    echo decoct($name) ;
}
    
?>

