<?php 
    function divide($num1, $num2){
        if($num2 == 0){
            throw new Exception("Không thể chia cho 0");
        }
        return $num1 / $num2;
    }
    echo divide(10, 0);


    try{
        echo divide(10, 0);
    }catch(Exception $e){
        echo "Lỗi: ";
    }
?>