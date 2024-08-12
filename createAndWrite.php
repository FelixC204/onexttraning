<?php
    $file = fopen("text.txt", "w") or die("Không thể mở file!");
    $content = "Hello World!";
    fwrite($file, $content);
    fclose($file);
    echo "Đã ghi file thành công!";
?>