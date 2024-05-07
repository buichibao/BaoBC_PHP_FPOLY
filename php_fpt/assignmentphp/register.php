<?php
$erroruser = null;

if(isset($_POST['register'])){
    include 'connect.php';

    $username = $_POST['username'];
    $password = $_POST['password'];
    $status = $_POST['status'];
    $createday = $_POST['createday'];
    $email = $_POST['email'];
    $role = $_POST['role'];

    $sql = "SELECT * FROM users WHERE username ='$username'";
    $result = mysqli_query($connect,$sql);

    // $a = mysqli_num_rows($result) == 1;
    
    if(!(mysqli_num_rows($result) == 1)){
        $sql = "INSERT INTO users(username ,password,createdate,status,email,role)
         values ('$username','$password','$createday',$status,'$email','$role')";
         mysqli_query($connect,$sql);
         echo "<script>alert('Tạo thành công account thành công');</script>";
         echo "<script>window.location='login.php';</script>";
    }else {
        $erroruser ="User name đã tồn tại";
    }

}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Đăng kí</title>
    <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <link rel="stylesheet" href="../assignment/css/style.css">
    <link rel="stylesheet" href="../assignment/css/register.css">
    
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


<!--Đăng nhập-->
<section class="order" id="order" style="margin-top: 100px;">


    <h1 class="sub-heading">ĐĂNG KÍ</h1>

    <form action="" method="post" id="nameForm">

        <div class="inputBox">
            <div class="input">
                <span>Tên đăng nhập</span>
                <input type="text" id="username" name="username" placeholder="Nhập tên tài khoản" required onkeyup="checkusername()">
                <p style="color:red" id="usernameError"><?php echo $erroruser ?></span>
            

            </div>
            <div class="input">
                <span>Mật khẩu</span>
                <input type="text" id="password" name="password" placeholder="Nhập mật khẩu" required>
            </div>
        </div>

        <div class="inputBox">
            <div class="input">
                <span>Xác nhận mật khẩu</span>
                <input type="text" id="comfirmpassword"  name="comfirmpassword" placeholder="Xác nhận mật khẩu" onkeyup="confrim()" required>
                <p style="color:red" id="passError"></p>

            </div>
            <div class="input"> 
                <input type="number" name="status"  value="1" hidden required>
                <input type="text" name="role" value="user" hidden required>
            </div>
        </div>

        <div class="inputBox">  
        <div class="input">
                <span>Email</span>
                <input type="email" id="email" name="email" placeholder="Nhập email" onkeyup="checkmail()"  required>
                <p style="color:red" id="emailError"></p>
            </div>
             <div class="input">
                <span>Ngày tạo</span>
                <input type="date" id="create" name="createday" required>
            </div>
        </div>

        <input type="submit" value="Đăng kí ngay" class="btn" name="register">
        <a style="font-size: 13px; color:#27ae60;margin-left:150px;" href="login.php">Đã có tài khoản ?</a>
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

<script src="../assignment/js/register_js.js"></script>
</body>
</html>