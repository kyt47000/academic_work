<?php
interface A {
    function a();
}

interface B {
    function b();
}

class C implements A, B {
    function a() {
        echo "I am class C. I implement interface A.<br>";
    }

    function b() {
        echo "I am class C. I implement interface B.";
    }
}
echo "Multiple inheritance not supported in php.So we are using interfaces...<br>";
$obj = new C();
$obj->a();
$obj->b();
?>