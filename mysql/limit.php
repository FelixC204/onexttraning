<?php 
include 'connect.php';
$conn = connect();
//PDO limit
try {
    $stmt = $conn->prepare("SELECT * FROM MyGuests LIMIT 2");
    $stmt->execute();
    $result = $stmt->fetchAll();
    echo "<br>";
    echo "Result: ";
    echo "<br>";
    foreach ($result as $row) {
        echo "id: " . $row['id'] . "<br>";
        echo "firstname: " . $row['firstname'] . "<br>";
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>