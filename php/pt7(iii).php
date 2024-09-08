<?php
// Create an object of a class
class MyClass {
    private $enrollNo;
    private $name;
    public function setAttribute($name,$num){
        $this->name=$name;
        $this->enrollNo=$num;
    }
    public function getAttribute(){
        return array($this->name,$this->enrollNo);
    }
}

$obj = new MyClass();
    $obj->setAttribute("Scarlett Wizard",226170307072);
    print_r($obj->getAttribute());
?>
