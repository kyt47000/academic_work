<?php
interface Shape{
    function shapeName();
    function drew();
}
class Circle implements Shape{
    function shapeName(){
        echo "I am Circle...<br>";
    }
    function drew(){
        echo "Drewing Circle...<br>";
    }
}
echo "Example of single interface...<br>";
$obj=new Circle();
$obj->shapeName();
$obj->drew();
?>