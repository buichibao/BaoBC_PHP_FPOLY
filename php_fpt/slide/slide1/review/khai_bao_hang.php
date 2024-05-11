<?php
/* 
Trong php , có 2 cách khai báo hằng đó là :
1. const  : ít được sử dụng , thường được dùng cục bộ
2. define : ưu tiên sử dụng , sử dụng toàn cục
*/

const PI = 3.14;
echo PI."\n";

define("email","cunglazy0404@gmail.com");
define("domain",email.".vn");
echo domain;

//Để kiểm tra 1 hằng có đã tồn tại hay chưa sử dụng defined (không thể sử dụng isset)

if(defined('email')){
    echo "Hằng email đã tồn tại";
}else{
    echo "Hằng email chưa tồn tại";
}


?>