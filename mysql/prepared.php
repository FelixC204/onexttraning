<?php 
include 'connect.php';
$conn = connect();
$id = 1;
$stmt = $conn->prepare("SELECT * FROM MyGuests WHERE id = :id");
$stmt->bindParam(":id", $id);
$stmt->execute();
$result = $stmt->fetch();
echo "<br>";
echo "Result: ";
echo "<br>";
echo "id: " . $result['id'] . "<br>";
echo "firstname: " . $result['firstname'] . "<br>";



