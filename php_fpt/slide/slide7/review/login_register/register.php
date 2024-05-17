<?php

include 'connect.php';

    $empty_user = null;
    $empty_pass = null;
    $empty_c_pass = null;
    $empty_email = null;
    $match_pass = null;
    $regex_email= null;
    $username = null;
    $password = null;
    $confirmPassword = null;
    $email = null;

if(isset($_POST['register'])){
    $username = $_POST['username'];
    $password = md5($_POST['password']);// mã hoá mật khẩu
    $confirmPassword = md5($_POST['confirmPassword']);
    $email = $_POST['email'];
    $date_create = date("Y-m-d H:i:s",strtotime('now'));

   
    if(empty($username)){
        $empty_user = "Không được để trống";
        $connect->close();
        exit();
    }
    if(empty($password)){
        $empty_pass = "Không được để trống";
        $connect->close();
        exit();
    }
    if(empty($confirmPassword)){
        $empty_c_pass = "Không được để trống";
        $connect->close();
        exit();
    }
    if(empty($email)){
        $empty_email = "Không được để trống";
        $connect->close();
        exit();
    }

    if(!($password === $confirmPassword)){
         $match_pass ="Mật khẩu không khớp";
         $connect->close();
        exit();
    }

    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $regex_email ="Email không đúng định dạng";

        exit();
    }

    $query = "INSERT INTO user(username,password,email,date_create) values('$username','$confirmPassword','$email','$date_create')";
    if($connect->query($query) === TRUE){
        $last_id = $connect->insert_id; // lấy ra id cuối cùng được thêm vào
        echo $last_id;
        header("location:login.php");
    }else {
        echo "lỗi";
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
    <form action="" method="post">
        User     : <input type="text"  name="username" id="username" value="<?php echo $username ?>"><br>
        <p><?php echo $empty_user  ?></p>
        Password :<input type="password" name="password" id="password" value="<?php echo $password ?>"><br>
        <p><?php echo $empty_pass  ?></p>
        Confirm  :<input type="password"  name="confirmPassword" id="confirmPassword" value="<?php echo $confirmPassword ?>"><br>
        <p><?php echo $empty_c_pass  ?></p>
        <p><?php echo $match_pass  ?></p>
        <p id="error_password"></p>
        Email    :<input type="text"  name="email" id="email" value="<?php echo $email ?>"><br>
        <p><?php echo $empty_email  ?></p>
        <p><?php echo $regex_email  ?></p>
        
        <input type="submit" value="register" name="register" id="submit" onclick="validate()">
    </form>
    <script src="script.js"></script>
</body>
</html>