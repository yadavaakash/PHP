<?php
    class Books{
        public $name;
        protected $price;
        private $weight;
    }
    $obj = new Books();
    $obj -> name ='PHP';
    $obj -> price = 500;
    $obj -> weight = '300'; 
?>