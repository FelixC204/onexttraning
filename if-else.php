<?php 
// Câu lệnh điều kiện if else
$age = 20;
if ($age < 18) {
    echo "Bạn chưa đủ tuổi";
} else {
    echo "Bạn đã đủ tuổi";
}

// Câu lệnh điều kiện if else if else
$point = 8;
if ($point < 5) {
    echo "Học sinh yếu";
} elseif ($point < 7) {
    echo "Học sinh trung bình";
} elseif ($point < 9) {
    echo "Học sinh khá";
} else {
    echo "Học sinh giỏi";
}
?>