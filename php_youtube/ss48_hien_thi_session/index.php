<?php

session_start();

$_SESSION['name'] = "bao"; // sửa tên và giá trị của session thì sửa trực tiếp ở đây

echo $_SESSION['name'];  // hiển thị session 



?>