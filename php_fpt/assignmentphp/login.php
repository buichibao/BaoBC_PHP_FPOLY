<?php
 $errorLogin =null;
 session_start();

 if(isset( $_SESSION['mysession'])){
    header('location:product.php');
 }

 if(isset($_POST['login'])){
    include 'connect.php';
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM users WHERE username = '$username' and password = '$password'";
    $result = mysqli_query($connect, $sql);

    if(mysqli_num_rows($result) > 0){

        $sql = "SELECT role FROM users WHERE username = '$username' and password = '$password'";
        $result = mysqli_query($connect,$sql);

        $row = mysqli_fetch_assoc($result);

        if($row['role'] == 'user'){
         $_SESSION['mysession'] = $username;
         header("Location:product_user.php"); 
        }else{
           $_SESSION['mysession'] = $username;
           header("Location:product.php"); 
        }

       
      
    }else{
       $errorLogin = "Tài khoản hoặc mật khẩu không chính xác!";
    
    }

 }

 if(isset($_POST['register'])){
    header("Location:register.php");
 }



?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Đăng Nhập</title>
    <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <link rel="stylesheet" href="../assignment/css/style.css">
    <link rel="stylesheet" href="../assignment/css/login.css">
</head>
<body>
<main>

<header>
    <a href="#" class="logo"><i class="fas-fa-untensils"></i>BuiChiBao.</a>


    <div class="icons">
        <i class="fas fa-bars" id="menu-bars"></i>
        <i class="fas fa-search" id="search-icon"></i>
        <a href="#" class="fas fa-heart"></a>
        <a href="#" class="fas fa-shopping-cart"></a>
    </div>
</header>




<!-- Form đăng kí đăng nhập -->
<section class="order" id="order" style="margin-top: 100px;">

   
    <h1 class="sub-heading">Đăng nhập</h1>

    <form action="" method="post">
        <div>
            <a href="#" class="logo" id ="logo_login">BuiChiBao.</a>
        </div>

        <div class="inputBox">
            <div class="input">
                <span>Tài khoản</span>
                <input type="text" name="username" placeholder="Nhập tên tài khoản">
            </div>
            <div class="input">
                <span>Mật khẩu</span>
                <input type="password"  name="password" placeholder="Nhập mật khẩu">
                <p style="color: red;"><?php echo $errorLogin; ?></p>
            </div>
        </div>
  
        <!-- Quên mật khẩu -->
        <p style="text-align: right;font-size:12px"><a href="sendmail.php">Quên mật khẩu ?</a></p>
   

      <div style="margin-left:80px ;margin-top:50px ;">
        <input type="submit" value="Đăng nhập" class="btn" name="login">
        <input type="submit" value="Đăng kí" class="btn" name="register" style="background-color:#27ae60">
      </div>
        
    </form>
</section>

<!--footer-->
<section class="footer">
    <div class="box-container">

       <div class="box">
           <h3>locations</h3>
           <a href="#">india</a>
           <a href="#">japan</a>
           <a href="#">russia</a>
           <a href="#">USA</a>
           <a href="#">france</a>
       </div>

        <div class="box">
            <h3>quick links</h3>
            <a href="#">home</a>
            <a href="#">dishes</a>
            <a href="#">about</a>
            <a href="#">review</a>
            <a href="#">order</a>
        </div>

        <div class="box">
            <h3>contact infor</h3>
            <a href="#">+123-456-7890</a>
            <a href="#">+111-222-3333</a>
            <a href="#">about</a>
            <a href="#">shaikhanas@gmail.com</a>
            <a href="#">anasbhai@gmail.com</a>
            <a href="#">mumbai,india - 400104</a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#">facebook</a>
            <a href="#">twitter</a>
            <a href="#">instagram</a>
            <a href="#">linkedin</a>
        </div>

    </div>
    <div class="credit">copyright @ 2023 by <span>Mr.Bui Chi Bao</span></div>
</section>

</main>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="script.js"></script>
</body>
</html>