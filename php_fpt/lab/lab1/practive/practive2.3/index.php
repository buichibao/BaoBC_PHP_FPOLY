<?php

$a = 10;
$b = 5;
$c = $a + $b;
echo "$a + $b = $c";

//ép kiểu
$a = 10;
$b = "5";
$c = $a + (int)$b;
echo "$a + $b = $c";

//hàm

function sum( $a, $b){
   return $a + $b;
}

echo sum(20,10);


?>