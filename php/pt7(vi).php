<?php
class A{
    function a(){
        echo "I am class A. I have method a().<br>";
    }
}
class B extends A {
     function b(){
        echo "I am class B. My parent is Class A.<br>";
     }
}
class C extends B {
    function C(){
       echo "I am class C. My parent is Class B.";
    }
}
echo "Example of multilevel inheritance...<br>";
$obj=new C();
$obj->a();
$obj->b();
$obj->c();
?>