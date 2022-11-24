<?php
class Books {
   var $name;
   var $price;

    function setName($n) {
       $this->name = $n;
    }
    function getName() {
      echo $this -> name;
    }
    function setPrice($p){
      $this -> price = $p;
    }
    function getPrice(){
      echo $this -> price;
    }
  }

    $phpbookobj = new Books();

    $phpbookobj->setName("PHP Bible ");
    $phpbookobj->setPrice(500);

    echo $phpbookobj->getName();
    echo $phpbookobj->getPrice();
?>