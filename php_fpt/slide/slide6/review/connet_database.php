<?php
//Trong PHP , có 2 các để kết nối php vs database
//1.Hướng thủ tục sử dụng mysqli_connect
//2.Hướng đối tượng sử dụng : new mysqli

$server = 'localhost';  // tên máy chủ dùng để chạy database
$user = 'root';         // tên username để truy xuất vào database
$pass = 'baobc';        // mật khẩu vào db
$dbname = 'review_connect'; // tên db cần kết nối

//C1 :
$connect = mysqli_connect($server,$user,$pass,$dbname);

if($connect){
    echo "Kêt nối database thành công 1\n";
}else {
    echo "Kết nối database thất bại";
}

mysqli_close($connect); // đóng kết nối theo hướng thủ tục

//C2 :
$connect = new mysqli($server,$user,$pass,$dbname);
if($connect){
    echo "Kêt nối database thành công 2\n";
}else {
    echo "Kết nối database thất bại";
}

$connect->close(); // đóng kết nối theo hướng đối tượng

?>