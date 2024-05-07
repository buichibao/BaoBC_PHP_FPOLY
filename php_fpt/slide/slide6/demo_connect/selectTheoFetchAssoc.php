<?php
require('connectDb.php');
// Select tất cả bảng users
$query1 = 'select * from users';
$results = mysqli_query($conn, $query1);
// Lấy số lượng record trả về
$numberRecord = mysqli_num_rows($results);
// Đọc tất cả các hàng
echo '<h1>Select all users</h1>';
while($row = mysqli_fetch_assoc($results)) {
    echo 'Id: ' . $row['id'] . ' - Username: ' . $row['username'] . ' - Password: ' . $row['password'] . '<br>';
}
// Đọc 1 hàng 
$query2 = 'select * from users where id = 1';
$result = mysqli_query($conn, $query2);
$row = mysqli_fetch_assoc($result);
echo '<h1>Select one user</h1>';
echo 'Id: ' . $row['id'] . ' - Username: ' . $row['username'] . ' - Password: ' . $row['password'] . '<br>';
?>