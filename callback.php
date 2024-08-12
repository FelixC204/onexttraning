<?php 
    function myFunction($callback){
        $callback();
    }
    function hello(){
        echo "Hello World!";
    }
    myFunction("hello");

?>