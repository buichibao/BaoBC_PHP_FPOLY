<?php
/* Trong PHP, để khai báo hằng có 2 cách
  1.const : TOÀN CỤC , ít sử dụng
  2.define: TOÀN CỤC và CỤC BỘ , ưu tiên sử dụng
*/
const PI = 3.14;
echo PI;

define("EMAIL","baobcpd09699@gmail.com");
echo EMAIL;

//Để kiểm tra 1 hằng đã tồn tại hay chưa không thể sử dụng isset mà phải sử dụng hàm defined
if(defined('EMAIL')){
    echo "Hằng đã tồn tại";
}

define("mang",[1,2,3]); //Hằng số cũng có thể chưa giá trị là mảng


?>