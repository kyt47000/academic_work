<?php
abstract class A{
    abstract function f1();
    function f2(){
        echo "Hello";
    }
}
class B extends A{
    function f1(){
        echo ",World...";
    }
}
echo "Example of simple abstract class...<br>";
$obj=new B();
$obj->f2();
$obj->f1();
?>
