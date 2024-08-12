<?php
$x = 5;
$y = 10.5;
echo $x;
echo $y;
// Trong PHP, biến bắt đầu bằng dấu $, theo sau là tên biến
// Biến trong PHP không cần khai báo kiểu dữ liệu, kiểu dữ liệu sẽ được xác định dựa vào giá trị mà biến đó chứa


// Gán nhiều giá trị
$x = $y = 5;

// Scope của biến
// Biến được tạo trong một hàm sẽ chỉ có thể sử dụng được trong hàm đó
function myTest() {
    $x = 5; // local scope
    echo "<p>Variable x inside function is: $x</p>";
}

//Muốn sử dụng biến toàn cục trong hàm, sử dụng từ khóa global
global $x; 
global $y;
