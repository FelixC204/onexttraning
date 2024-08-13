<?php 
include 'connect.php';
$conn = connect();
//PDO where
try {
    $stmt = $conn->prepare("SELECT * FROM MyGuests WHERE id = :id");
    $id = 1;
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    $result = $stmt->fetch();
    echo "<br>";
    echo "Result: ";
    echo "<br>";
    echo "id: " . $result['id'] . "<br>";
    echo "firstname: " . $result['firstname'] . "<br>";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
?>