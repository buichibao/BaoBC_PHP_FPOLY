<?php
session_start();
if(!isset($_SESSION['mysession'])){
    header('location:login.php');
}
include 'connect.php';

$sql = "SELECT productname,categoryname,image,price,products.id as p_id FROM products JOIN categories ON products.category_id = categories.id WHERE products.status = 1 and productname like '%%'";
$result = mysqli_query($connect,$sql);
if(isset($_GET['search'])){
    $productName = $_GET['productName'];
    $sql = "SELECT productname,categoryname,image,price,products.id as p_id FROM products JOIN categories ON products.category_id = categories.id WHERE products.status = 1 and productname like '%$productName%'";
    $result = mysqli_query($connect,$sql);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="../assignment/css/style.css">
    <link rel="stylesheet" href="../assignment/css/product.css">
    
</head>
<body>
<main>

<header>
    <a href="" class="logo"><i class="fas-fa-untensils"></i>BuiChiBao.</a>
    
    <nav class="navbar">
        <a class="active" href="product_user.php">Sản phẩm</a>
        <a href="">Danh mục</a>
        <a href="">Voucher</a>
        <a href="">Menu</a>
        <a href="">Đối tác</a>
        <a href="">Gọi món</a>
    </nav>

    <div class="icons">
        <i class="fas fa-bars" id="menu-bars"></i>
        <i class="fas fa-search" id="search-icon"></i>
        <a href="#" class="fas fa-heart"></a>
        <a href="cart.php" class="fas fa-shopping-cart"></a>
        <a href="logout.php">Đăng xuất</a>
    </div>
</header>

<!--search form-->

<form action=""  id="search-form" method="get">
    <input type="text" placeholder="search here..." name="productName" id="search-box">
   
    <i class="fas fa-times" id="close"></i>
    <button type="submit" name="search" style="background: none;"> <label for="search-box" class="fas fa-search"></label></button>
</form>

<section class="home" id="home">
    <div class="swiper-container home-slider">
        <div class="swiper-wrapper wrapper">
            <div class="swiper-slide slide">
                <div class="content">
                    <span>our spacial dish</span>
                    <h3>spicy noodles</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.Sit natus dolor cumque?</p>
                    <a href="#" class="btn">oder now</a>
                </div>
                <div class="image">
                    <img src="https://khoinguonsangtao.vn/wp-content/uploads/2022/10/hinh-anh-ga-ran.jpg" alt="">

                </div>
            </div>
            <div class="swiper-slide slide">
                <div class="content">
                    <span>our spacial dish</span>
                    <h3>spicy noodles</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.Sit natus dolor cumque?</p>
                    <a href="#" class="btn">oder now</a>
                </div>
                <div class="image">
                    <img src="img/h5.jpg" alt="" >
                </div>
            </div>
            <div class="swiper-slide slide">
                <div class="content">
                    <span>our spacial dish</span>
                    <h3>spicy noodles</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.Sit natus dolor cumque?</p>
                    <a href="#" class="btn">oder now</a>
                </div>
                <div class="image">
                    <img src="https://hangngoainhap.net.vn/upload/news/nh-bia-7732.PNG" alt="">

                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</section>
<!-- menu-->
<section class="menu" id="menu">
    <h3 class="sub-heading">our menu</h3>
    <h1 class="heading">Hôm nay ăn gì?</h1>
   
    
    <div class="box-container">
        <?php  
       
          while($row = mysqli_fetch_array($result)){
        ?>
        <div class="box">
            <div class="image">
                <a href="product_details.php?id=<?php echo $row['p_id'] ?>"><img src="../assignment/img/<?php echo $row['image'] ?>"/></a>  <!-- ảnh -->
                <a href="" class="fas fa-heart"></a>
            </div>
            <div class="content">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3><?php echo $row['productname'] ?></h3>    <!-- tên -->
                <p>Lorem ipsum dolor sit amet,consectetur adipisicing elit.Aperam,nemo.Sit   <!-- mô tả -->
                    poro illo.</p>
                <p style="color:orangered;font-weight:bold" ><?php echo $row['categoryname'] ?></p>    
                
                <span class="pice"><?php echo $row['price'] ?> VND</span>   
                <a href="cart.php?id=<?php echo $row['p_id'] ?>" class="btn" style="margin-left: 30px;" name ="add">Thêm vào giỏ hàng</a>
            
            </div>
        </div>
        <?php } ?>
        
    </div>
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
<script src="../assignment/js/script.js"></script>
</body>
</html>