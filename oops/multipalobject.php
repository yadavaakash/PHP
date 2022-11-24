<?php

use Books as GlobalBooks;

    class Books{
        public function name(){
            echo " PHP Books ";
        }
        public function price(){
            echo " 500 ";
        }

    }

    $obj = new Books();
    $obj -> name();
    $obj -> price();

    $obj1 = new Books();
    $obj1 -> name();
    $obj1 -> price();

?>