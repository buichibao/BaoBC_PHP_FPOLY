<?php
if (isset($_GET['path'])) {
    if ($_GET['path'] == 'google')
        echo 'Đây là trang google';
    if ($_GET['path'] == 'facebook')
        echo 'Đây là trang facebook';
} else {
    if (isset($_POST['username']) && isset($_POST['password'])) {
        if (!filter_var($_POST['username'], FILTER_VALIDATE_EMAIL)) { // hàm xác thực dữ liệu
            //Không dùng HTMLSpecialChars: echo '<h1>Mời nhập lại Email của bạn</h1>';
            echo htmlspecialchars('<h1>Mời nhập lại Email của bạn</h1>'); // Khi có sử dụng HTMLSpecialChars (biến tất cả thành chỗi)
        } else {
            if ($_POST['username'] == 'admin@gmail.com' && $_POST['password'] == '123123') {
                echo '<h1>Home Page</h1>';
            } else {
                echo "<h1 style='color: red;'>Tài khoản hoặc mật khẩu không đúng</h1>";
            }
        }
    }
}
?>