<?php
//Khai báo hằng
const PI = 3.14;
define("phonenumber","0945896269");

//Phạm vi sử dụng : Hằng số có phạm vi global
function getArea($r){
    return PI*$r*$r;
}
$area = getArea(3);
echo $area;

//kiểm tra 1 hằng đã tồn tại hay chưa sử sụng defined
if(defined("PI")){
   echo "PI đã tồn tại";
}else {
    echo "PI chưa tồn tại";
}


class MyClass {
    const EMAIL = "baobc@gmail.com";
}
if(defined("EMAIL")){
    echo "đã tồn tại";
}else {
    echo "chưa tồn tại"; // kết quả
} 

//Khi kiểm tra hằng kèm tên lớp
if(defined("Myclass::EMAIL")){
    echo "đã tồn tại"; // Kết quả
}else {
    echo "chưa tồn tại";
}

//Không thể huỷ , xoá 1 hằng số
// unset(PI); lỗi


?>