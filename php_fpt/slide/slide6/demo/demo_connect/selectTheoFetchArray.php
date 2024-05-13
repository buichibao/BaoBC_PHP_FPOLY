<?php
require('connectDb.php');
// Select tất cả bảng users
$query1 = 'select * from users';
$results = mysqli_query($conn, $query1); // Thực thi query
// Đọc tất cả các hàng
echo '<h1>Select all users</h1>';
while($row = mysqli_fetch_array($results)) {
    // Sử dụng key là tên cột
    // echo 'Id: ' . $row['id'] . ' - Username: ' . $row['username'] . ' - Password: ' . $row['password'] . '<br>';
    // Sử dụng vị trí index
    echo 'Id: ' . $row[0] . ' - Username: ' . $row[1] . ' - Password: ' . $row[2] . '<br>';
}
// Đọc 1 hàng 
$query2 = "select * from users where username = 'admin'"; // select theo giá trị varchar
$result = mysqli_query($conn, $query2);
$row = mysqli_fetch_array($result);
echo '<h1>Select one user</h1>';
echo 'Id: ' . $row['id'] . ' - Username: ' . $row['username'] . ' - Password: ' . $row['password'] . '<br>';
?>