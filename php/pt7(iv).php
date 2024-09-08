<?php
class A{
    function a(){
        echo "I am class A. I have method a().<br>";
    }
}
class B extends A {
     function b(){
        echo "I am class B. My parent is Class A.";
     }
}
echo "Example of single inheritance...<br>";
$obj=new B();
$obj->a();
$obj->b();
?>