<?php

// Toán tử số học
$a = 10 ;
$b = 5 ;

$result = $a + $b; 
echo $result."\n"; //15

$result = $a - $b;
echo $result."\n"; //5

$result = $a * $b;
echo $result."\n"; //50

$result = $a / $b;
echo $result."\n"; //2

$result = $a % $b;
echo $result."\n"; //0

$result = $a**$b;
echo $result."\n";// 100000 = a mũ b


//Toán tử gán
$number = 10;

$number += 5;
echo $number."\n"; // 15

$number -= 5;
echo $number."\n"; // 10

$number *= 5;
echo $number."\n"; // 50

$number /= 5;
echo $number."\n"; // 10

$number %= 5;
echo $number."\n"; // 0

//Toán tử tăng giảm
$x = 5;

$y1 = $x++; // 5
$y2 = ++$x; // 7
$y3 = --$x; // 6
$y4 = $x--; // 6

echo $y1."-".$y2."-".$y3."-".$y4;

//Toán tử logic
echo ( true && false)."\n";  // false
echo ( true && true)."\n";   //true
echo ( false && false)."\n"; //false
echo ( true || false)."\n";  //true  => chú ý hàm echo tự động ép kiểu true => 1 và false = 0 => ""
echo ( false || false)."\n"; //false
echo ( true || true)."\n";   //true
echo (!true)."\n";           //false
echo (!false)."\n";          //true


//Toán tử so sánh

echo ( 2 == 3)."\n";   //false
echo ( 2 != 3)."\n";   //true
echo ( 2 <> 3)."\n";   //true
echo ( 2 === 3)."\n";  //false 
echo ( 2 !== 3)."\n";  //true
echo ( 2 > 3)."\n";    //false
echo ( 2 < 3)."\n";    //true
echo ( 2 >= 3)."\n";   //false
echo ( 2 <= 3)."\n";   //true
echo (2 =="2")."\n";   //true


//Không phân biệt kiểu dữ liệu
//Trả về 1 nếu : a > b 
//Trả về 0 nếu : a = b 
//Trả về -1 nếu: a < b 
echo (2 <=>"2")."\n";   //0
echo (2 <=>2)."\n";     //0
echo (2 <=>"3")."\n";   //-1
echo (2 <=>4)."\n";     //-1
echo (2 <=> 0)."\n";    //1
echo (2 <=> "1")."\n";   //1
?>