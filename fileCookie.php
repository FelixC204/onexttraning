<?php 
    $cookie_name = "user";
    $cookie_value = "John Doe";

    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 NGÀY
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
       if(isset($_COOKIE[$cookie_name])){
        echo $_COOKIE[$cookie_value];
       }
       else{
           echo "Cookie is not set";
       }
    ?>
</body>
</html>