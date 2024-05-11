<?php
//array_map : dùng để duyệt qua các phần tử của 1 mảng truyền vào và đồng thời gọi 1 hàm ẩn danh để xử lý
$array1 = [1,2,3,4,5];

function double($number){
   return $number * 2;
}

$array2 = array_map("double",$array1);
print_r($array2);

?>