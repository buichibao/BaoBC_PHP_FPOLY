<?php

// Htmlspecialchars : được dùng để mã hoá các câu lệnh thành dạng text , tránh hacker nhập những đoạn mà JS vào các trường

// Giả sử biến $username chứa tên người dùng được nhập từ biểu mẫu
$username = "<script>alert('Hack!');</script>";

// Hiển thị tên người dùng trên trang web
echo "Xin chào, " . htmlspecialchars($username) . "!";  // hiển thị chuỗi , biến mã JS thành chuỗi

echo "Xin chào, " . ($username) . "!"; // Mã JS vẫn được chạy





?>