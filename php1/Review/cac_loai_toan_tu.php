<?php
//Toán tử số học
$a = 10;
$b = 2;
$tong      =   $a + $b;
$hieu      =   $a - $b;
$tich      =   $a * $b;
$thuong    =   $a / $b;
$chialaydu =   $a % $b;
$luythua   =   $a ** $b;

echo $tong;
echo $hieu;
echo $tich;
echo $thuong;
echo $chialaydu;
echo $luythua;

//Toán tử gán
$number = 10;
$number **= 10;
$number += 10;
$number -= 10;
$number *= 10;
$number /= 10;
$number %= 10;

//Toán tử tăng giảm
$a = 10;

$a1 = $a++; //10
$a2 = ++$a; //12
$a3 = --$a; //11
$a4 = $a--; //11

echo $a1 . '-' . $a2 . '-' . $a3 . '-' . $a4 . '-' . $a; //10-12-11-11-10

//Toán tử logic :  && , || , ! 
//Trong PHP, hàm echo ép kiểu true = 1 , và false = 0 nhưng in ra ""
echo true && true;    //1
echo false && true;   //0
echo false && false;  //0
echo true || true;  //1;
echo true || false;  //1;
echo false || false;  //1;
echo !true;           //0
echo !false;          //1

//Toán tử so sánh 
//Chỉ so sánh giá trị không quan tâm kiểu dữ liệu (2 dấu bằng) : == , < , > , <= , >=

echo 2 == "2";  //1
echo 2 <= "2";  //1
echo 2 >= "2";  //1
echo 2 > "2";   //0
echo 2 > "2";   //0

//So sánh giá trị và kiểu dữ liệu (3 dấu bằng) : === , !==
echo 2 === 2;  //1
echo 2 ==="2"; //0
echo 2 !=="2"; //1

// a <=> b : sử dụng để so sánh 2 vế không quan tâm kiểm dữ liệu 
// a > b  return 1;
// a == b return 0;
// a < b  return -1;
echo 2 <=> "2"; //0
echo 2 <=> "1"; //1
echo 2 <=> "a"; //-1
echo 2 <=> 3;   //-1
       
?>