<?php

$server = "127.0.0.1:4407";
$user  ="root";
$password = "";
$database = "webcuatoi";

$connect = new mysqLi($server , $user ,$password ,$database);

if($connect){
    mysqli_query($connect, "SET NAMES utf8");
    echo "Kết nối thành công";
}else {
    echo "Kết nối thất bạn";
}


?>