<?php
$server = 'localhost';  // tên máy chủ dùng để chạy database
$user = 'root';         // tên username để truy xuất vào database
$pass = 'baobc';        // mật khẩu vào db
$dbname = 'review_connect'; // tên db cần kết nối

$connect = new mysqli($server ,$user ,$pass, $dbname);

$query = "CREATE DATABASE create_db_php1";
if($connect ->query(($query))){
    echo "Tạo thành công db";
}else {
    echo "Tạo thất bại";
}

$query = "CREATE DATABASE create_db_php2";
if(mysqli_query($connect,$query)){
    echo "Tạo thành công db";
}else {
    echo "Tạo thất bại";
}


?>