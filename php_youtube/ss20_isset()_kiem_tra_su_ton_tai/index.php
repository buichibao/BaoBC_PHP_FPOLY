<?php

//hàm isset(tên biến) : dùng để kiểm tra biến đó tồn tại hay không ?
// có trả về 1 (true) , nếu không thì không trả về (false) 
$a = null;  // " " - false
$a ;        // " " - false
$a = 10;    // 1 - true

echo isset($a);

//Ứng dụng để sau này kiểm tra xem người dùng đã nhập vào giá trị hay chưa

$name = null;

if(isset($name)){
    echo "Tên đã nhập";
}else{
    echo "Tên chưa nhập";
}

$address ="Hà Tĩnh";
echo "\n";
if(isset($address)){
    echo "Tên đã nhập";
}else{
    echo "Tên chưa nhập";
}
?>