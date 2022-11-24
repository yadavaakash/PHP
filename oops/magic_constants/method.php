<?php
    class testClass{
        function fun_test(){
            echo __METHOD__;
        }
    }
    $obj = new testClass();
    $obj -> fun_test();
?>