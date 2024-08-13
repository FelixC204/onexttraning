<?php
include 'connect.php';
$conn = connect();
try {
    $conn->beginTransaction();
    $sql = "INSERT INTO MyGuests (firstname, lastname, email) VALUES (:firstname, :lastname, :email)";

    $data = [
        ['firstname' => 'Nguyen', 'lastname' => 'Linh', 'email' => 'nguyenlinh2007@gmail.com'],
        ['firstname' => 'Nguyen', 'lastname' => 'Khanh', 'email' => 'nguyenkhanh123@gmail.com'],
        ['firstname' => 'Tran', 'lastname' => 'Duc', 'email' => 'tranduc19191@gmail.com']
    ];
    foreach ($data as $row) {
        $stmt = $conn->prepare($sql);
        $stmt->execute($row);
    }

    $conn->commit();
    echo "New records created successfully";
} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}
$conn = null;
