<?php

$a = 5;
$b = 10;


// Toán tử số học
echo $a + $b ."\n";
echo $a - $b."\n";
echo $a * $b."\n";
echo $a / $b."\n";
echo $a % $b."\n";


//Toán tử gán
$c = 100;
echo $c += 100 ."\n";
echo $c -= 100 ."\n";
echo $c *= 100 ."\n";
echo $c /= 100 ."\n";
echo $c %= 100 ."\n";

//Toán tử so sánh :== , ===, != , <> , <, > , >= , <= ....
$d1 = 5;
$d2 = "5";
$d3 = 10;

if($d1 === $d2){
    echo "$d1 = $d2";
}else{
    echo "$d1 != $d2 vì string khác number \n";
}

if($d1 <> $d3){
      echo "$d1 != $d3 ";
}

//Toán tử tăng giảm : a++ , a-- , ++a , --a

$e = 10;
echo ++$e ."\n";  //11
echo $e++ ."\n";  //11
echo $e-- ."\n";  //12
echo --$e ."\n";  //10

//Toán tử logic : && , or = ||, xor(chỉ có 1 vế đúng = true , cả 2 vế đúng = false) , !
$g1 = 10;
$g2 = 1;

if($g1 > 5 xor $g2 < 5){
    echo "Đúng";
}else {
    echo "sai";
}

$g3 = false;
if(!$g3){
    echo  "true";
}

//Toán tử nối chuỗi trong php là "."
$f1 = "hello ";
$f2 = "Bảo";

echo $f1 . $f2;

?>