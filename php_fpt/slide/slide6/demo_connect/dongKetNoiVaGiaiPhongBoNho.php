<?php
require('connectDb.php');
$query = 'select username,password from users order by username';
if ($result = mysqli_query($conn, $query)) {
    // Lấy tất cả các hàng
    while($row = mysqli_fetch_array($result)){
        printf("Username: %s - Password: %s <br>", $row[0], $row['password']);
    }
    // Giải phóng bộ nhớ sau xử lý
    mysqli_free_result($result);
}
// Đóng kết nối sau khi giải phóng 
mysqli_close($conn);
?>