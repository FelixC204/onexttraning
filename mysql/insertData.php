<?php 
include "connect.php";
$conn = connect();

try {
    $sql = "INSERT INTO MyGuests (firstname, lastname, email) VALUES (:firstname, :lastname, :email)";
    
    $stmt = $conn->prepare($sql);
    
    $firstname = "John";
    $lastname = "Doe";
    $email = "jd@gmail.com";

    $stmt->bindParam(':firstname', $firstname);
    $stmt->bindParam(':lastname', $lastname);
    $stmt->bindParam(':email', $email);

    $stmt->execute();

    echo "New record created successfully";
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}


$conn = null;
?>
