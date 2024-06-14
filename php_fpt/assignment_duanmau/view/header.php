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
    

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/product.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/register.css">
    <link rel="stylesheet" href="css/cart.css">
    <link rel="stylesheet" href="css/select.css">
    <link rel="stylesheet" href="css/billcomfirm.css">
    
</head>
<body>
<main>

<header>
    <a href="" class="logo"><i class="fas-fa-untensils"></i>BuiChiBao.</a>
    
    <nav class="navbar">
        <a href="index.php?page=listproduct">Sản phẩm</a>
        <a href="index.php?page=listcategory">Danh mục</a>
        <a href="index.php?page=listproduct">Top 10 sản phẩm yêu thích</a>
        <a href="#menu">Đối tác</a>
        <a href="#contract">Liên hệ</a>
    </nav>

    <div class="icons">
        <i class="fas fa-bars" id="menu-bars"></i>
        <i class="fas fa-search" id="search-icon"></i>
        <a href="#" class="fas fa-heart"></a>
       
        <?php
           if(!isset($_SESSION['user'])){ ?> 
              <a href="index.php?page=login" title="Đăng nhập" class="fas fa-user"></a>
          <?php }else {  extract($_SESSION['user']); ?>
              <?php if($role == 1){ ?>
                 <a href="index.php?page=loginadmin"><i class='bx bxs-user-check' title="Đăng nhập vào trang quản trị"></i></a>
                <span>Hello, <?=$username ?></p>
              <?php } else { ?> 
              <a href="index.php?page=mybill" class="fas fa-shopping-cart"></a>
              <a href="index.php?page=logout" class='bx bx-log-in' title="Đăng xuất"></a>
              <span>Hello, <?=$username ?></p>
          <?php 
                }
            }?>
    </div>
</header>
