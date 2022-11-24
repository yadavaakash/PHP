<?php
    class Books{
        public $author = "Akash ";
        public $publication = "";
            public function name(){
                echo " PHP Book ";
            }
            public function price(){
                echo " 500 ";
            }
    }

    $obj = new Books();
    $obj -> name();
    $obj -> price();

    echo $obj->author;

    $obj->publication = " Akash Prakashan";
    echo $obj->publication;
?>