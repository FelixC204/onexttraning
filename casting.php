<?php 
// Ép kiểu dữ liệu
$int = 123;
$float = 1.23;

$int = (int) $float;
$float = (float) $int;

echo $int;
echo $float;

//Ép kiểu dữ liệu với object
class Casting{
    public $name = "Casting";

}
$casting = new Casting();
$casting = (array) $casting;

var_dump($casting);

//Ép kiểu dữ liệu với mảng
$cars = array("Volvo", "BMW", "Toyota");
$cars = (object) $cars;

?>