<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="phpSuperGlobals.php?name=PHP&age=123">Test $GET</a>
<form action="" method="post">
    Name: <input type="text" name="name">
    <input type="submit">
</form>
</body>
</html>

<?php 
// Super Globals
// 1 Biến toàn cục, tức là có thể truy cập ở bất kỳ đâu
$GLOBALS['x'] = 5;

function myTest() {
    echo "<p>Variable x inside function is: $GLOBALS[x]</p>";
}

myTest();

// 2 $_SERVER
// Mảng chứa thông tin về header, paths và script locations
echo $_SERVER['PHP_SELF']; // /phpSuperGlobals.php
echo "<br>";
echo $_SERVER['SERVER_NAME']; // localhost
echo "<br>";
echo $_SERVER['HTTP_HOST']; // localhost
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT']; // thông tin về trình duyệt
echo "<br>";
echo $_SERVER['SCRIPT_NAME']; // /phpSuperGlobals.php
echo "<br>";


// 3 $_REQUEST
// Mảng chứa thông tin về biến POST và GET
echo $_REQUEST['name'];
echo "<br>";

// 4 $_POST
// Mảng chứa thông tin về biến POST
echo $_POST['name'];
echo "<br>";


// 5 $_GET
// Mảng chứa thông tin về biến GET
echo "Study " . $_GET['name'] . " at " . $_GET['age'];
echo "<br>";
?>

