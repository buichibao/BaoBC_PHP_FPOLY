<?php

$server = "localhost";
$user   = "root";
$password = "baobc";
$database = "review_connect";

$connect = new mysqli($server , $user , $password , $database);

$query = "INSERT INTO user(id,name,age,class_name) values (8,9,8,9)";

if($connect->query($query)){
    echo "Thêm thành công";
}


?>