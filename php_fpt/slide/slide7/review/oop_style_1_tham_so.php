<?php

$server = "localhost";
$user   ="root";
$password = "baobc";
$database = "webbanhang";

$connect = new mysqli($server,$user,$password,$database);

if($connect->connect_errno){
    echo "Lỗi kết nối : ".$connect->connect_errno;
}

$stmt = $connect->prepare("SELECT id, productname, price FROM products WHERE id = ?");  //trên này lấy ra bao nhiều tham số

$id = 1;
$stmt->bind_param("s",$id);
$stmt->execute();
$stmt->bind_result($id,$productname,$price); // dưới này phải in ra bấy nhiêu

while($stmt->fetch()){
    echo "ID = $id , Productname = $productname , Price = $price";
}



?>