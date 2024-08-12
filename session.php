<?php 
    session_start();
    $_SESSION["username"] = "admin";
    $_SESSION["password"] = "admin";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
</head>
<body>
    <h1>Session</h1>
    <?php 
        if(isset($_SESSION["username"]) && isset($_SESSION["password"])){
            echo "Welcome " . $_SESSION["username"];
            echo "<br>";
        }
        else{
            echo "Session chưa được tạo";
        }

        // Xoá session
        // session_unset();
        // Hoặc
        // session_destroy();
    ?>
</body>
</html>
