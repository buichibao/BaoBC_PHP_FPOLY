<?php

include("connect.php");

$sql = "CREATE TABLE thanhvien (
    id int(5) UNSIGNED AUTO_INCREMENT PRIMARY KEY ,
    taikhoan varchar(30) not null,
    matkhau varchar(30) not null,
    level int(6) not null
)";

//Thực thi câu truy vấn trên


if(mysqli_query($connect,$sql)){  //$connect->query($sql) 
    echo "Tạo bảng thành công";
}else {
    echo "Tạo bảng thất bại";
}

?>