<?php 
include '../mysql/connect.php';
$conn = connect();
$name = $_POST['name'];
try {
    $stmt = $conn->prepare("SELECT * FROM MyGuests WHERE firstname = :name");
    $stmt->bindParam(":name", $name);
    $stmt->execute();
    $result = $stmt->fetch();
    if($result == false){
        $result = array();
    }
    $result['id'] = $result['id'] ?? "No result found";
    $result['firstname'] = $result['firstname'] ?? "No result found";
    echo "<br>";
    echo "Result: ";
    echo "<br>";
    echo "id: " . $result['id'] . "<br>" ;
    echo "firstname: " . $result['firstname'] . "<br>" ;
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

?>