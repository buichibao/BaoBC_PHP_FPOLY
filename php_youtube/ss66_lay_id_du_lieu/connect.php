<?php

$server = "127.0.0.1:4407";
$user = "root";
$password = "";
$database = "webbanhang";


$connect = new mysqli($server , $user , $password , $database);


if($connect){
    echo "Kết nối database thành công";
}else {
    echo "Kết nối database thất bại";
}

?>