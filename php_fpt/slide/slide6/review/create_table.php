<?php

$server = "localhost";
$user   = "root";
$pass   = "baobc";
$database = "review_connect";

$connect = new mysqli($server,$user,$pass,$database);

if($connect){
    echo "Kết nối thành công";
}else {
    echo "Kết nối thất bại";
}

$query = "CREATE table user (
    id int(10)  auto_increment primary key,
    name varchar(256),
    age int(3),
    class_name varchar(256)
)";

if($connect->query($query)){
    echo "Tạo bảng thành công";
}else {
    echo "Tạo bảng thất bại";
}


?>