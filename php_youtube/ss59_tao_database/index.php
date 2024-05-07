<?php

include("connect.php");

if(mysqli_query($connect,"CREATE DATABASE quanlykhachhang")){
    echo "tạo thành công";
}else {
    echo "tạo thất bại";
}

?>