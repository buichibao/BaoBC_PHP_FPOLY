<?php
$a = 10;
function test(){
    //echo $a; không thể sử dụng được hàm định nghĩa bên ngoài vào hàm
}
test();

global $x,$y;

function sum(){
    $x = 10 ; 
    $y = 20 ;
    return $x + $y;
}
echo sum();

$GLOBALS['m'] = 10;
$GLOBALS['n'] = 10;
function sum2(){
    $GLOBALS['r'] =  $GLOBALS['m'] + $GLOBALS['n'];
}

sum2();
echo $r;

?>