<?php 
echo "Hôm nay là ngày " .date("Y/m/d");
echo "<br>";
echo "Giờ hiện tại " .date("h:i:sa");
echo "<br>";

date_default_timezone_set("Asia/Ho_Chi_Minh");
echo "Giờ hiện tại " .date("h:i:sa");
echo "<br>";

//mktime dùng để tạo ra thời gian
mktime(2, 0, 0, 12, 31, 2024);

//strtotime dùng để chuyển đổi chuỗi thành thời gian
strtotime("tomorrow");
strtotime("next Saturday");
strtotime("+3 Months");
