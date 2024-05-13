<?php

//Trong PHP , xây dựng 3 hàm để hiển thị thông tin của biến
// 1. print_r , var_dump , var_export

$array = array(1,2,3);

print_r($array);

var_dump($array); // hiển thị thông tin , số lượng , kiểu dữ liệu , chi tiết nhất

var_export($array);

?>