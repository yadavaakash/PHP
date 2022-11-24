<?php
    class A{
        public function printName($string){
            echo "Hi $string <br/>";
        }
        public function printMsg(){
            echo "I am From A Class <br/>";
        }
    }
    class B extends A{
            public function printName($string){
                echo "Hi $string <br/>";
            }
            public function printMsg(){
                echo "I am From B Class <br/>";
            }
    }
    $a = new A();
    $b = new B();
    $a->printName('Akash');
    $a->printMsg();
    $b->printName('Yadav');
    $b->printMsg();

?>