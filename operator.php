<?php 
// Toán tử
$a = 5;
$b = 2;
echo $a + $b; // 7
echo "<br>";
echo $a - $b; // 3
echo "<br>";
echo $a * $b; // 10
echo "<br>";
echo $a / $b; // 2.5
echo "<br>";
echo $a % $b; // 1
echo "<br>";
echo $a ** $b; // 25
echo "<br>";
echo $a++; // 5
echo "<br>";
echo $a; // 6
echo "<br>";

// Toán tử so sánh
$x = 5;
$y = 10;
//Toán tử == so sánh giá trị của 2 biến
var_dump($x == $y); // false
echo "<br>";
//Toán tử === so sánh giá trị và kiểu dữ liệu của 2 biến
var_dump($x != $y); // true
echo "<br>";
//Toán tử != so sánh giá trị của 2 biến
var_dump($x > $y); // false
echo "<br>";
//Toán tử !== so sánh giá trị và kiểu dữ liệu của 2 biến
var_dump($x < $y); // true
echo "<br>";
// Toán tử >= so sánh lớn hơn hoặc bằng
var_dump($x >= $y); // false
echo "<br>";
// Toán tử <= so sánh nhỏ hơn hoặc bằng
var_dump($x <= $y); // true
echo "<br>";
// Toán tử <=> so sánh 2 biến, trả về 0 nếu bằng nhau, trả về 1 nếu biến thứ nhất lớn hơn biến thứ 2, trả về -1 nếu biến thứ nhất nhỏ hơn biến thứ 2
var_dump($x <=> $y); // -1
echo "<br>";
// Toán tử && so sánh và , trả về true nếu cả 2 biến đều đúng 
var_dump($x && $y); // true
echo "<br>";
// Toán tử || so sánh hoặc, trả về true nếu 1 trong 2 biến đúng
var_dump($x || $y); // true
echo "<br>";
// Toán tử ! so sánh phủ định, trả về true nếu biến đó sai
var_dump(!$x); // false
echo "<br>";

// Toán tử nối chuỗi
$firstName = "Nguyen";
$lastName = "Van A";
echo $firstName . " " . $lastName; // Nguyen Van A
echo "<br>";
// Toán tử nối chuỗi khác
$firstName .= $lastName;
echo $firstName; // Nguyen Van A
echo "<br>";

// Toán tử 3 ngôi
$age = 20;
echo ($age < 18) ? "Child" : "Adult"; // Adult

// Toán tử điều kiện null
$test = null;
echo $test ?? "Hello World!"; // Hello World!