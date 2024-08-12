<?php 
// Function
function myFunction($name = "World") {
    echo "Hello $name!";
}

myFunction("PHP");

// Function return
function myFunctionReturn($name = "World") {
    return "Hello $name!";
}

echo myFunctionReturn();

?>