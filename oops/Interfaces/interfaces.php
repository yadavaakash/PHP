<?php
    interface A{
        public function setProperty($x);
        public function description();
    }
    class Books implements A{
        public function setProperty($x){
            $this->x = $x;
        }
        public function description(){
            echo 'Description is '.$this->x;
        }
    }

    $obj = new Books();
    $obj->setProperty("PHP");
    $obj->description();
?>