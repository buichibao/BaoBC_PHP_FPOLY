<?php


  $admin ="admin@gmail.com";
  $passwordAdmin = "123456";

  session_start();

  if(isset($_SESSION["admin"])){
    header("Location: admin.php");
  }

  if(isset($_POST['btn'])){
     $email = $_POST["email"];
     $password = $_POST["password"];
     
     if($email == $admin && $password == $passwordAdmin){
        header("Location: admin.php");
        $_SESSION["admin"] = $email;
     }else {
        echo "Tài khoản mật khẩu không chính xác";
     }
  }

  
?>

<form action="login.php" method="post">
    <label for="email">Email</label>
    <input type="text" name="email" id="email"><br>
    <label for="password">Password</label>
    <input type="password" name="password" id="password"><br>
    <input type="submit" name="btn" value="Đăng nhập">
</form>