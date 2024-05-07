<?php
require('connectdb.php');
if(isset($_POST['user']) && isset($_POST['pass'])) {
    $username = $_POST['user'];
    $password = md5($_POST['pass']); // mã hóa mật khẩu
    $query = "insert into users(username,password) values ('$username','$password')";
    if(mysqli_query($conn, $query)) {
        mysqli_close($conn);
        header('Location: index.php'); // Chuyển trang
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Thêm mới user</h1>
    <form action="" method="post">
        <input type="text" name="user" placeholder="Mời nhập username"><br>
        <input type="password" name="pass" placeholder="Mời nhập password"><br>
        <input type="password" name="confirmpass" placeholder="Mời nhập confirm password"><br>
        <button type="submit">Thêm mới</button>
    </form>
</body>
</html>