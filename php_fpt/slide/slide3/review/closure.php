<?php

//Closure là 1 loại amonyus function dùng để truy cập các biến bên ngoài phạm vi của hàm bằng tự khoá use

$x = 10 ;
$y = 20 ;

$mySum = function($z) use ($x , $y){
    return $x + $y + $z;
};

echo $mySum(40);


?>