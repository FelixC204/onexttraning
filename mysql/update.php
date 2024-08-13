<?php 
include 'connect.php';
$conn = connect();
//PDO update
try {
    $stmt = $conn->prepare("UPDATE MyGuests SET firstname = :firstname WHERE id = :id");
    $id = 4;
    $firstname = "Khanh";
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":firstname", $firstname);
    $stmt->execute();
    echo "Record updated successfully";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>