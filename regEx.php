<?php 
// Kiểm tra chuỗi có chứa số không bằng hàm preg_match()
$pattern = "/[0-9]/";
$str = "Hello World!";
echo preg_match($pattern, $str); 
// Kết quả: 0 vì không tìm thấy số trong chuỗi

// Dùng hàm preg_match_all() để tìm tất cả các số trong chuỗi
$pattern = "/[0-9]/";
$str = "Hello World! 123";
echo preg_match_all($pattern, $str);

// Dùng hàm preg_replace() để thay thế tất cả các số trong chuỗi
$pattern = "/[0-9]/";
$str = "Hello World! 123";
echo preg_replace($pattern, "*", $str);

