<?php
class MyClass {
    public function myMethod() {
        $numArgs = func_num_args();
        if ($numArgs == 0) {
            $this->myMethodWithNoArgs();
        } else if ($numArgs == 1) {
            $this->myMethodWithOneArg(func_get_arg(0));
        } else if ($numArgs == 2) {
            $this->myMethodWithTwoArgs(func_get_arg(0), func_get_arg(1));
        } else {
            echo "Invalid number of arguments!<br>";
        }
    }

    private function myMethodWithNoArgs() {
        echo "Method with no arguments<br>";
    }

    private function myMethodWithOneArg($arg1) {
        echo "Method with one argument: $arg1<br>";
    }

    private function myMethodWithTwoArgs($arg1, $arg2) {
        echo "Method with two arguments: $arg1 and $arg2<br>";
    }
}

$obj = new MyClass();
$obj->myMethod(); 
$obj->myMethod(10); 
$obj->myMethod(20, 30);
$obj->myMethod(1, 2, 3); 
?>