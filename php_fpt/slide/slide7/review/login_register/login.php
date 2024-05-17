<?php
include 'connect.php';

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $query = "SELECT * FROM user WHERE username = '$username'";
    $result = $connect->query($query);
    if(($result->num_rows) === 1){
        echo "đăng nhập thành công";
        header("location:list_user.php");
    } else {
        echo "đăng nhập thất bại";
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
    <form action="login.php" method="post">
        UserName :<input type="text" name="username" ><br>
        PassWord :<input type="password" name="password" ><br>
        <input type="submit" name="login" >
    </form>
</body>
</html>