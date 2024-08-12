<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table>
        <tr>
            <td>Filter Name</td>
            <td>Filter ID</td>
        </tr>
        <?php
        $filters = filter_list();
        foreach ($filters as $filter) {
            echo '<tr><td>' . $filter . '</td><td>' . filter_id($filter) . '</td></tr>';
        }
        ?>
    </table>
</body>

</html>

<?php
// Filter var
$int = 123;
if (filter_var($int, FILTER_VALIDATE_INT)) {
    echo "Integer is valid";
} else {
    echo "Integer is not valid";
}
echo "<br>";

$string = "<h1>Hello World!</h1>";
$newString = filter_var($string, FILTER_SANITIZE_STRING);
echo $newString;
echo "<br>";

// Filter ip address
$ip = "192.168.1.1";
if (filter_var($ip, FILTER_VALIDATE_IP)) {
    echo "IP is valid";
} else {
    echo "IP is not valid";
}
echo "<br>";

// Filter email
$email = "khanh@gmail.com";
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Email is valid";
} else {
    echo "Email is not valid";
}

echo "<br>";

// Filter url
$url = "https://www.google.com";
if (filter_var($url, FILTER_VALIDATE_URL)) {
    echo "URL is valid";
} else {
    echo "URL is not valid";
}
?>