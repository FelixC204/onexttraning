<?php
// Để định nghĩa một hằng số, sử dụng hàm define()
define("GREETING", "Welcome to Tranning PHP!");
// Tham số đầu tiên của hàm define() là tên của hằng số và tham số thứ hai là giá trị của hằng số
echo GREETING;

// Hằng số không thể thay đổi giá trị sau khi đã được định nghĩa
// GREETING = "Welcome to PHP!"; // Lỗi

// Sử dụng const để định nghĩa hằng số
const PI = 3.14;
echo PI;

// Hằng số là một mảng 
define("People", [
    "Nguyen Van A",
    "Nguyen Van B",
    "Nguyen Van C"
]);

echo People[0];

// Hằng số có thể dùng trong mọi nơi
function myTest() {
    echo People[1];
}

?>