<?php 
    $file = fopen("text.txt", "r") or die("Không thể mở file!");
    echo fread($file, filesize("text.txt"));
    fclose($file);

?>