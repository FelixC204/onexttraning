<?php 
include "connection.php";
$conn = connect();
//PDO create database
try {
    $sql = "CREATE DATABASE myDB";
    $conn->exec($sql);
    echo "Database created successfully<br>";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

?>