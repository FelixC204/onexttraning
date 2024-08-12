<?php
// Array
$fruits = array("Apple", "Banana", "Orange");
echo $fruits[0];
echo "<br>";
// Array Length
echo count($fruits);
echo "<br>";
// Loop Through an Indexed Array
foreach ($fruits as $fruit) {
    echo $fruit . "<br>";
}

// Associative Array
$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
echo "Peter is " . $age['Peter'] . " years old.";

// Các hàm thường dùng với mảng
$arr = array(1, 2, 3, 4, 5);
// sort() - sắp xếp mảng theo thứ tự tăng dần
echo sort($arr);
// rsort() - sắp xếp mảng theo thứ tự giảm dần
echo rsort($arr);
// Xoá phần tử trong mảng
unset($age['Peter']);
// Kiểm tra xem một phần tử có tồn tại trong mảng không
echo array_key_exists('Peter', $age); // false
echo "<br>";

// Thêm phần tử vào mảng
$age['Peter'] = 35;

