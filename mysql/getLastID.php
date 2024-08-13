<?php 
    include "connect.php";
    $conn = connect();
    try {
        // Chuẩn bị câu lệnh SQL
        $sql = "INSERT INTO MyGuests (firstname, lastname, email, reg_date) 
                VALUES (:firstname, :lastname, :email, NOW())";
        $stmt = $conn->prepare($sql);
        
        // Bind các tham số
        $stmt->bindParam(':firstname', $firstname);
        $stmt->bindParam(':lastname', $lastname);
        $stmt->bindParam(':email', $email);
        
        $firstname = "Nguyen Van";
        $lastname = "A";
        $email = "nva@gmail.com";

        $stmt->execute();
        
        // Lấy ID của bản ghi vừa chèn
        $last_id = $conn->lastInsertId();
        
        echo "New record created successfully. Last inserted ID is: " . $last_id;
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    } finally {
        // Đóng kết nối
        $conn = null;
    }
?>