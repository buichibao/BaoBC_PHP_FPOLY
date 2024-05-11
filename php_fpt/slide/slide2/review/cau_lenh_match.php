<?php

/*
Trong php , match dùng để thay thế switch-case với cú pháp ngắn gọn hơn :
  1.match hỗ trợ :nhiều case trả về 1 kết quả
  2.match cú pháp gắn gọn hơn
  3.match có kết quả trả về
  4.match không cần sử dụng lệnh break;
  5.match so sánh "==="
*/

$bool = true;
$result = match($bool){
  true => "Bằng 1",
  false => "Bằng 0",
  default => "Không xác định"
};
echo $result;

//Hỗ trợ nhiều case trả về 1 kết quả
$number = -3;
$result = match($number){
    1,2,3 => "Lớn hơn 0",
    0     => "Bằng 0",
    -1,-2,-3 => "Bé thua 0",
    default =>"Không xách định"
};
echo $result;

//switch-case so sánh == còn match ===
$x = 1;
switch($x){
    case '1':
        echo "string"; // case này chạy
        break;
    case 1:
        echo "intiger";
        break;    
}

$result = match($x){
    '1'=> "string",
    1 =>"int"  // case này chạy
};
echo $result;



?>