<?php

$server = "localhost";
$user   = "root";
$password = "baobc";
$database = "review_connect";

$connect = new mysqli($server,$user,$password,$database);

if($connect){
    echo "Kết nối db thành công";
}else {
    echo "Kết nối db thất bại";
}

$query = "DROP DATABASE create_db_php";
if($connect->query($query)){
    echo "Xoá thành công";
}else {
    echo "Xoá thất bại";
}

?>