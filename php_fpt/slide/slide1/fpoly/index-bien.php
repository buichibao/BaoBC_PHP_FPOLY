<?php
$bienSoNguyen = 10; // Kiểu dữ liệu số nguyên INT
$bienSoThuc = 5.5; // Kiểu dữ liệu số thực FLOAT
$bienBoolean = true; // Hoặc false Kiểu Boolean
$bienNull = null; // Kiểu dữ liệu null - không có giá trị
$bienChuoi1 = 'hello world!'; // Kiểu dữ liệu String
$bienChuoi2 = "Hello World!"; // Kiểu dữ liệu String
$vanban = $bienChuoi1 . ", Tôi tên là Nguyễn Văn A";
$bienChuoi1 .= ", Tôi tên là Nguyễn Văn B"; 
// $bienChuoi1 = $bienChuoi1 . ", Tôi tên là Nguyễn Văn B"
echo $vanban;
?>