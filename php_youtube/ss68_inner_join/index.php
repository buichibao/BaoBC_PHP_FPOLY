<?php

include 'connect.php';

$sql = "SELECT * FROM thanhvien join chitietthanhvien on thanhvien.id = chitietthanhvien.id";

mysqli_query($connect ,$sql);    

?>