<?php 
    $data = array(
        "name" => "Khanh",
        "age" => 20,
        "city" => "Phu Tho"
    );
    echo json_encode($data);
    $a = '{"name":"Khanh","age":20,"city":"Phu Tho"}';
    var_dump(json_decode($a)); 
?>