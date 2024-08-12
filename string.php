<?php
//String trong PHP có thể được định nghĩa bằng cách sử dụng dấu nháy đơn hoặc dấu nháy kép
echo "Hello World!";
echo 'Hello World!';
//Dấu nháy kép sẽ hiểu biến bên trong, còn dấu nháy đơn sẽ hiểu biến như một chuỗi
$name = "World!";
echo "Hello $name";
//Dấu nháy kép sẽ chậm hơn so với dấu nháy đơn
echo 'Hello $name';
//Để in ra dấu nháy đơn hoặc dấu nháy kép, sử dụng dấu escape \
echo 'Hello \'World\'!';
//Dấu nháy kép còn được gọi là double quote
//Dấu nháy đơn còn được gọi là single quote


// Hàm strlen() trả về độ dài của chuỗi
echo strlen("Hello World!"); // 12
// Hàm str_word_count() trả về số từ trong chuỗi
echo str_word_count("Hello World!"); // 2

// Để tìm kiếm một chuỗi trong chuỗi khác, sử dụng hàm strpos()
echo strpos("Hello World!", "World"); // 6

// Để thay thế một chuỗi trong chuỗi khác, sử dụng hàm str_replace()
echo str_replace("World", "Dolly", "Hello World!"); // Hello Dolly! Tham số thứ nhất là chuỗi cần thay thế, tham số thứ hai là chuỗi thay thế, tham số thứ ba là chuỗi cần thay thế

// Để chuyển đổi chuỗi thành chữ hoa, sử dụng hàm strtoupper()
echo strtoupper("Hello World!"); // HELLO WORLD!

// Để chuyển đổi chuỗi thành chữ thường, sử dụng hàm strtolower()
echo strtolower("Hello World!"); // hello world!

// substr() trả về một phần của chuỗi
echo substr("Hello World!", 6); // World!
echo substr("Hello World!", 6, 5); // World

