<?php
class MyClass{
    public $amount;
}
$value=5;
$obj=new MyClass();
$obj->amount=&$value;
$copy=clone $obj;
$obj->amount=6;
echo "Example of cloning object....<br>";
print_r($copy);
?>