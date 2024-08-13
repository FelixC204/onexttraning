<?php 
include 'connect.php';
$conn = connect();

try {
    $stmt = $conn->prepare("DELETE FROM MyGuests WHERE id = :id");
    $id = 1;
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    echo "Record deleted successfully";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>