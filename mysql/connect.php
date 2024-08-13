<?php 
   function connect(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "myDB";

    // Tạo kết nối
    try{
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // Thiết lập chế độ lỗi
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Kết nối thành công";
    }catch(Exception $e){
        echo "Lỗi: " .$e->getMessage();
    }
    return $conn;
   }
  
?>