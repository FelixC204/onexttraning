<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>  
    <form action="formvalidation.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name">
        <br>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email">
        <input type="submit" value="Submit">
    </form>
    <?php 
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $name = $_POST["name"];
            $email = $_POST["email"];
            if(empty($name)){
                echo "Name is required";
            }else{
                echo "Welcome " . $name;
            }
            echo "<br>";
            if(empty($email)){
                echo "Email is required";
            }else{
                echo "Your email address is: " . $email;
            }
        }
    ?>
</body>
</html>