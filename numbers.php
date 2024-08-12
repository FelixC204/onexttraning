<?php 
$int = 123;
$float = 1.23;
$string = "123";
var_dump($int);// int(123)
var_dump($float);// float(1.23)
var_dump($string);// string(3) "123"


// Chuyển đổi kiểu dữ liệu
$int = (int) $float;
var_dump($int);// int(1)
// Check kiểu dữ liệu
var_dump(is_int($int));// bool(true)
var_dump(is_float($float));// bool(true)
var_dump(is_string($string));// bool(true)
?>