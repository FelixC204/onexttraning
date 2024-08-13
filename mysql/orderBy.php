<?php 
include 'connect.php';
$conn = connect();
//PDO orderBy
try {
    $stmt = $conn->prepare("SELECT * FROM MyGuests ORDER BY  firstname DESC");
    $stmt->execute();
    $result = $stmt->fetchAll();
    echo "<br>";
    echo "Result: ";
    echo "<br>";
    foreach ($result as $row) {
        echo "id: " . $row['id'] . "<br>";
        echo "firstname: " . $row['firstname'] . "<br>";
        echo "lastname: " . $row['lastname'] . "<br>";
        echo "email: " . $row['email'] . "<br>";
        echo "reg_date: " . $row['reg_date'] . "<br>";
        echo "<br>";
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>