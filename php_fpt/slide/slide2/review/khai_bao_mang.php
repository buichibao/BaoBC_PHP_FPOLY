<?php

/*Trong php, có 2 cách thường dùng để khai báo và khởi tạo mảng
  1.sử dụng constructor array
  2.sử dụng dấu "[]"
  Lưu ý : Mảng trong PHP, có thể lưu được nhiều loại kiểu dữ liệu khác nhau cùng lúc
*/
$array_1 = array(1,2,3,4);
print_r($array_1);

$array_2 = [1,2,3,4];
print_r($array_2);

$array_2[] = 5; // nếu thêm phần tử vào mảng không truyền chỉ số thì , mặc định thêm vào cuối mảng
print_r($array_2);

$array_2[]="Bảo";
print_r($array_2);
?>