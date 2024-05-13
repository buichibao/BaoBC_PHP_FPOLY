<?php
 session_start();
 if(isset($_POST['btn'])){
    if($_POST['user']==="baobc" && $_POST['password']==="123"){
        $_SESSION['user'] = $_POST['user'];
        header("location:login_controller.php");
        
    }else {
        echo "tài khoản mật khẩu không chính xác";
    }
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form  method="post">
        <input type="text" name="user" placeholder="Nhập tên đăng nhập">
        <input type="password" name="password" placeholder="Nhập mật khẩu">
        <input type="submit" value="login" name="btn">

    </form>
</body>
</html>