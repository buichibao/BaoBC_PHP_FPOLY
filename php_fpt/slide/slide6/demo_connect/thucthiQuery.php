<?php
include 'connectDb.php';
// Tạo db mới
// if(mysqli_query($conn, "create database wd18302ver2")) {
//     echo 'Thêm db thành công!';
// } else {
//     echo 'tèo';
// }
// Tạo bảng
$queryTbl = "create table users(
    id int primary key auto_increment,
    username varchar(100) not null,
    password varchar(100) not null
)";
if(mysqli_query($conn, $queryTbl)) {
    echo 'Tạo bảng thành công!';
}
// Thêm dữ liệu vào bảng users
$query = "insert into users(username,password)
values ('admin','123123'),('binhll','123123'),('annv','112233')";
if(mysqli_query($conn, $query)) {
    echo 'Thêm dữ liệu thành công!';
}
?>