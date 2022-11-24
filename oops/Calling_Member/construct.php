<?php
    class car{
        private $model;

        public function __construct($model){
            $this-> model = $model;
        }
        public function getCarModel(){
            return ' The Car Model is : ' . $this-> model;
        }
    }
    $car1 = new car("Tata");
    echo $car1 -> getCarModel();
?>