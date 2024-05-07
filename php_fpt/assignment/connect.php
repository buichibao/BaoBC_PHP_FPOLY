<?php

$server = 'localhost';
$user = 'root';
$pass = 'baobc';
$dbname = 'webbanhang';
$connect = mysqli_connect($server, $user, $pass, $dbname);
if (!$connect) {
    die('Kết nối db thất bại');
}


?>