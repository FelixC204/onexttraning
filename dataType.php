<?php
$x = 5;
// Để biết biến đó đang chứa kiểu dữ liệu gì, sử dụng hàm var_dump()
var_dump($x);

//Float
$y = 10.5;
var_dump($y);

//Boolean
$e = true;
var_dump($e);

$x = "Hello world!";
$y = 'Hello world!';

//Array
$cars = array("Volvo", "BMW", "Toyota");
var_dump($cars);


//Object
class Student
{
    public $name;
    public $age;
    public $gender;

    function __construct($name, $age, $gender)
    {
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
    }

    public function printInfo()
    {
        echo "Name: " . $this->name;
        echo "Age: " . $this->age;
        echo "Gender: " . $this->gender;
    }
}

$student = new Student("John", 20, "Male");

var_dump($student);

//NULL
$z = 2;
$z = null;
var_dump($z);

