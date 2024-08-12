<?php 
// Filter Advance
// Validate an Integer
$int = 123;
$min = 1;
$max = 100;
if (filter_var($int, FILTER_VALIDATE_INT, array("options" => array("min_range" => $min, "max_range" => $max))) === false) {
    echo "Integer is not valid";
} else {
    echo "Integer is valid";
}
echo "<br>";
//Kết quả : Integer is valid vì 123 nằm trong khoảng từ 1 đến 100.

// Validate an IP V6 address
$ip = "2180:a009:70d0:07c0:a070:0000:0000:0001";
if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6) === false) {
    echo "IP is not valid";
} else {
    echo "IP is valid";
}

?>