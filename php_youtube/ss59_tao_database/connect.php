<?php

$sever = "127.0.0.1:4407";
$user  ="root";
$password = "";

$connect = new mysqli($sever , $user , $password);
if($connect){
    echo "kết nối thành công";
}else{
    echo "kết nối thất bại";
}

?>