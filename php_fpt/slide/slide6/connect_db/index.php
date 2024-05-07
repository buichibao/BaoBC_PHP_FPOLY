<?php

$server = 'localhost';
$user = 'root';
$pass = 'baobc';
$dbname = 'wd19201';
$conn = mysqli_connect($server, $user, $pass, $dbname);
if (!$conn) {
    die('Kết nối db thất bại');
}

$sql = "INSERT INTO lophoc (MaLop,TenLop)
values ('C0522G1','Lập trình web')";

mysqli_query($conn,$sql);
?>