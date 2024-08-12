<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Handling</title>
</head>
<body>
    <form action="" method="GET">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name">
        <br>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email">
        <input type="submit" value="Submit">
    </form>
</body>
</html>

<?php 
    if(isset($_GET["name"]) && isset($_GET["email"])){
        echo "Welcome " . $_GET["name"];
        echo "<br>";
        echo "Your email address is: " . $_GET["email"];
    }
?>

