<?php
    class Books{
        public function name(){
            echo "PHP Book ";
        }
        public function price (){
            echo " 500";
        }

    }

    $obj = new Books();
    $obj -> name();
    $obj -> price();

?>