<?php
class Student {
    public $name;
    public $enrollmentNumber;

    public function __construct($name, $enrollmentNumber) {
        $this->name = $name;
        $this->enrollmentNumber = $enrollmentNumber;
        echo "I am Constructor...<br>";
    }

    public function __destruct() {
        echo "Destroyed class object by destructor...<br>";
        echo "Student Name : $this->name<br>";
        echo "Enrollment No : $this->enrollmentNumber<br>";
    }
}

$student = new Student("Yash Kayastha", 226170307072);
?>