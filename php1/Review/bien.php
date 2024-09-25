<?php
//Biến là 1 vùng nhớ dùng để lưu trữ dữ liệu
$a = 10;
$b;
$c = 100;
echo $a;
echo $b; // null nếu không khởi tạo giá trị
if(is_null($b)){ // Kiểm tra 1 biến có phải là null hay không isnull($variable)
    echo "b = 0 \n";
}
//Kiểm tra kiểu dữ liệu của biến
echo var_dump($a); 
echo var_dump($b);

unset($a);
echo $a; //:  Undefined variable $a in lỗi này là cố gắng truy cập 1 biến mà chưa được khai báo hoặc khởi tạo 

if(isset($a)){
    echo "a đã tồn tại";
}else {
    echo "a chưa tồn tại";
}

function biencucbo(){
    $bien_cuc_bo = 100; // biến cục bộ chỉ sử dụng được trong hàm khai báo nó
    return $bien_cuc_bo;
}

$bien_toan_cuc = "Global variable";
function useGlobalVariable(){
    global $bien_toan_cuc; // sử dụng global để sử dụng biến toàn cục trong hàm
    echo $bien_toan_cuc;
}
useGlobalVariable();

$_SESSION['username'] ="Bùi Chí Bảo"; // biến siêu toàn cục dùng được tất cả mọi nơi

//Biến y tham chiếu đến biến x , thì x và y dùng dùng vùng nhớ 
//Khi 1 trong 2 biến thay đổi giá trị thì kéo theo biến còn lại
$x = 100;
$y = &$x;
echo $x."-".$y; // 100 - 100
$y = 99;
echo $x."-".$y; // 99 - 99
$x = 88;
echo $x."-".$y; // 88 - 88

//Biến hằng(const variable)  : khởi taọ giá trị luôn khi khai báo và giá trị đó không được thay đổi
const PI = 3.14;
echo PI;

define("BIRTHDAY","22-02-2001");
echo BIRTHDAY;

//Biến động (variable variables) : lấy giá trị của 1 biến là tên của 1 biến khác
$z = "bao";
$$z = 10;
echo $bao; // 10
?>