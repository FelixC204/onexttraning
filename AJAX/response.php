<?php 
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST['name'];
        echo "Name: " . $name . "<br>";
    }
?>