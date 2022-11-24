<?php
    class A {
        public function myName() {
            return "<br/> My Name is Akash";
        }
    }
    class B extends A {
        public function myAge() {
            return "<br/> Age is 30";
        }
    }
    class C extends B{
        public function myBoss() {
            return "<br/> Age is 80";
        }
        public function myHistory() {
            echo "<br/> Class A " . $this->myName(); 
            echo "<br/> Class B " . $this->myAge(); 
            echo "<br/> Class C " . $this->myBoss(); 
        }
    }

    $obj = new C();
    $obj->myHistory();
?>