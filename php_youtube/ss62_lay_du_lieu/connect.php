<?php

$server ="127.0.0.1:4407";
$user ="root";
$password ="";
$database ="webbanhang";

$connect = new mysqli($server , $user , $password , $database);


if($connect){
    echo "Kết nối thành công";
    echo "<br>";
}else {
    echo "Kết nối thất bạn";
}


?>