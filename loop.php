<?php 
// Vòng lặp for
for ($i = 0; $i < 5; $i++) {
    echo "Số " . $i . "<br>";
}
echo "<br>";
// Vòng lặp while
$i = 0;
while ($i < 5) {
    echo "The number is " . $i . "<br>";
    $i++;
}
echo "<br>";
// Vòng lặp do while
$i = 0;
do {
    echo "The number is " . $i . "<br>";
    $i++;
} while ($i < 5);
echo "<br>";

// Vòng lặp foreach
$colors = array("red", "green", "blue", "yellow");
foreach ($colors as $key => $value) {
    echo "Key: " . $key . " Value: " . $value . "<br>";
}

// Vòng lặp lồng nhau
for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j < 5; $j++) {
        echo "i = " . $i . ", j = " . $j . "<br>";
    }
}
?>