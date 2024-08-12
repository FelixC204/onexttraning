<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <label for="url">URL:</label>
        <input type="url" name="url" id="url">
        <br>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email">
        <br>
        <label for="name">Name:</label>
        <input type="text" name="name" id="name">
        <input type="submit" value="Submit">
    </form>

    <?php
    $name = $_POST["name"];
    if(!preg_match("/^[a-zA-Z-' ]*$/", $name)){
        echo "Only letters and white space allowed";
    }else{
        echo "Welcome " . $name;
    }
    $email = $_POST["email"];
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Email is valid";
        echo $email;
    } else {
        echo "Email is invalid";
    }

    $url = $_POST["url"];
    if (filter_var($url, FILTER_VALIDATE_URL)) {
        echo "URL is valid";
        echo $url;
    } else {
        echo "URL is invalid";
    }
    ?>
</body>

</html>