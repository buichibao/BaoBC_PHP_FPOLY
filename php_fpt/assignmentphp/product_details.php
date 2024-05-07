<?php
session_start();
if(!isset($_SESSION['mysession'])){
    header('location:login.php');
}
if(isset($_GET['id'])){
    include 'connect.php';
    $id = $_GET['id'];

    $sql = "SELECT * FROM products JOIN categories ON products.category_id = categories.id WHERE products.id = '$id'";

    $result = mysqli_query($connect,$sql);

    $row = mysqli_fetch_assoc($result);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Chi Tiết Sản Phẩm</title>
    <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="../assignment/css/style.css">
</head>
<body>
<main>

<header>
    <a href="#" class="logo"><i class="fas-fa-untensils"></i>BuiChiBao.</a>
    
    <nav class="navbar">
        <a class="active" href="product_user.php">Product</a>
        <a href="">dishes</a>
        <a href="">about</a>
        <a href="">menu</a>
        <a href="">review</a>
        <a href="">oder</a>
    </nav>

    <div class="icons">
        <i class="fas fa-bars" id="menu-bars"></i>
        <i class="fas fa-search" id="search-icon"></i>
        <a href="#" class="fas fa-heart"></a>
        <a href="#" class="fas fa-shopping-cart"></a>
        <a href="logout.php">Đăng xuất</a>
    </div>
</header>

<!--search form-->

<form action=""  id="search-form">
    <input type="text" placeholder="search here..." name="" id="search-box">
    <label for="search-box" class="fas fa-search"></label>
    <i class="fas fa-times" id="close"></i>
</form>

<!--home section starts-->


<!-- starts-->
<div>
   <h1>.</h1>
    <h1>.</h1> 
</div>

<section class="about" id ="about">
    <h3 class="sub-heading">Detais Product</h3>


    <div class="row">
        <div class="image">
            <img src="../assignment/img/<?php echo $row['image'] ?>" style="height:450px"/>
        </div>
        <div class="content">
            <h3><?php echo $row['productname'] ?></h3>
             <h2 style="font-size: 20px;color:orangered;font-weight:bold"><?php echo $row['categoryname'] ?></p>
            <p>Lorem ipsum dolor sit amet consectetur adpisicing elit. Dolore,sequi corrupti
            corporis quaerat voluptatem ipsam neque labore modi autem, saepe numquam quod
            reprehenderit rem? Tempora aut soluta odio corporis nihil!</p>       
            <p>Lorem ipsum dolor sit amet consectetur adpisicing elit. Dolore,sequi corrupti
            corporis quaerat voluptatem ipsam neque labore modi autem, saepe numquam quod
            reprehenderit rem? Tempora aut soluta odio corporis nihil!</p>
        
            <div class="star">
           
                <i class="fas fa-star" style="color:#FFCC00 ;font-size: 20px;" ></i>
                <i class="fas fa-star" style="color:#FFCC00 ;font-size: 20px;" ></i>
                <i class="fas fa-star" style="color:#FFCC00 ;font-size: 20px;" ></i>
                <i class="fas fa-star" style="color:#FFCC00 ;font-size: 20px;" ></i>
                <i class="fas fa-star-half-alt" style="color:#FFCC00 ;font-size: 20px;" ></i>


            </div>
            <span style="font-size: 30px;color:orangered;font-weight:bold">$<?php echo $row['price'] ?></span>
        
         
            <div class="icons-container">
                <div class="icons">
                    <i class="fas fa-shipping-fast"></i>
                    <span>Delivery</span>
                </div>
                <div class="icons">
                    <i class="fas fa-dollar-sign"></i>
                    <span>Pay</span>
                </div>
                <div class="icons">
                    <i class="fas fa-add"></i>
                    <span>Add to cart</span>
                </div>
            </div>
      
        </div>
    </div>

</section>

<!-- menu-->


<!-- review-->

<section class="review" id="review">
    <h3 class="sub-heading">customer's review</h3>
    <h1 class="heading">what they say</h1>

    <div class="swiper-container review-slider">
        <div class="swiper-wrapper">

            <div class="swiper-slide slide">
            <i class="fas fa-quote-right"></i>
                <div class="user">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ97p-Dvc-_AnZJpQ0oV9w1QclIaKFisIjspQ&usqp=CAU"/>
                    <div class="user-info">
                        <h3>john deo</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
                <p>Lorem ipsum dolor sit amet,consectetur adipisicing elit.Aperam,nemo.Sit
                    poro illo.Lorem ipsum dolor sit amet,consectetur adipisicing elit.Aperam,nemo.Sit
                    poro illo.</p>
            </div>
            <div class="swiper-slide slide">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <img src="https://vtv1.mediacdn.vn/zoom/640_400/2023/1/1/regular-16-9-16725370714711912934831-crop-1672537075570905006899.jpg"/>
                    <div class="user-info">
                        <h3>john deo</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
                <p>Lorem ipsum dolor sit amet,consectetur adipisicing elit.Aperam,nemo.Sit
                    poro illo.Lorem ipsum dolor sit amet,consectetur adipisicing elit.Aperam,nemo.Sit
                    poro illo.</p>
            </div>
            <div class="swiper-slide slide">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <img src="data:image/jpeg;base64,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"/>
                    <div class="user-info">
                        <h3>john deo</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
                <p>Lorem ipsum dolor sit amet,consectetur adipisicing elit.Aperam,nemo.Sit
                    poro illo.Lorem ipsum dolor sit amet,consectetur adipisicing elit.Aperam,nemo.Sit
                    poro illo.</p>
            </div>
            <div class="swiper-slide slide">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <img src="data:image/jpeg;base64,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"/>
                    <div class="user-info">
                        <h3>john deo</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
                <p>Lorem ipsum dolor sit amet,consectetur adipisicing elit.Aperam,nemo.Sit
                    poro illo.Lorem ipsum dolor sit amet,consectetur adipisicing elit.Aperam,nemo.Sit
                    poro illo.</p>
            </div>
        </div>
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