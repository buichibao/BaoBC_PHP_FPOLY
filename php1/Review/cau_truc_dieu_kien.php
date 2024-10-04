<?php

//if đơn
$age = 18;

if($age >= 18){
    echo "Bạn đã đủ tuổi";
}

//if - else 
if($age > 45){
    echo "Bạn có quyền được nghỉ hưu";
}else {
    echo "Bạn chưa đủ tuổi nghỉ hưu";
}

//if -else if - else
$age = 14;
if($age < 10){
   echo "Thiếu nhi";
}else if ($age < 16){
   echo "Thiếu niên";
}else{
   echo "Thanh niên";
}

// toán tử 3 ngôi

$a = 10 ;
$b = 100;
$result = ($a > $b)?'a lớn hơn b':'b lớn hơn a';
echo $result;

//switch - case

$x = 51;
switch ($x){
    case '5':
        echo 'Đây là kí tự 5'; // đây là kết quả trả về
        break;
    case 5:
        echo 'Đây là số 5';
        break;
    // default:
    //     echo ' Không biết';
}

$char = 'C';

switch ($char){
    case 'A':
    case 'B':
    case 'C':
        echo 'A , B hoặc C';
        break;
    case 'D':
    case 'E':
    case 'F':
        echo 'D , E hoặc CF';
    break;
    default:
        echo "Không biết";
}

//match() 
  $x = 5;
  $result = match($x){
    '5'=>'Đây là kí tự',
     5=>'Đây là số', // kết quả
     default=>'Không có case nào đúng'
  };
  echo $result; 

  $char = 'H';
  $result = match($char){
    'A','B','C'=>'A hoặc B hoặc C',
    'D','E','F'=>'D hoặc E hoặc F',
    'G','H','K'=>'G hoặc H hoặc K', //Kết quả
    default => 'Không có trường hợp nào'
  };
  echo $result;

?>