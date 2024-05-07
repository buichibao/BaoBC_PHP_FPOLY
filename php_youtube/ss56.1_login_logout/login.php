<?php
session_start();

if(isset($_SESSION['email'])){
    header("Location: admin.php");
}


if(isset($_POST['btn'])){
   if(($_POST['email'] =="admin@gmail.com") && ($_POST['password']=="1")){
    $_SESSION['email'] = $_POST['email'];
    header("Location: admin.php");
   } else {
      echo "Tài khoản hoăc mật khẩu không chính xác";
   }
}

?>




<form action="login.php" method="post">
    <label for="email">Email</label>
    <input type="email" name="email" id="email"> <br>

    <label for="email">Password</label>
    <input type="password" name="password" id="password">

    <input type="submit" name="btn" value="Login">
</form>