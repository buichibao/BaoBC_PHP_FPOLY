<?php

include("connect.php");

$id = "";
$taikhoan = "nguoidung1";
$pass = "123123";
$level = 2;
$sql = "INSERT INTO thanhvien(id , taikhoan , matkhau , level )
values ('$id' , '$taikhoan','$pass' , '$level')";

mysqli_query($connect ,$sql);



?>