<?php

$server = "127.0.0.1:4407";
$user = "root";
$pass ="";
$database ="webbanhang";


$connect = new mysqli($server , $user , $pass,$database);

if($connect){
    echo "Kết nối thành công ";
    echo "<br>";
}


?>