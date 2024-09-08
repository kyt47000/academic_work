<?php
// Create an object of a class
class MyClass {
    public $property = "This is a public property.";

    public function method() {
        return "This is a public method.";
    }
}

$obj = new MyClass();
echo $obj->property . "<br>";
echo $obj->method() . "<br>";
?>
