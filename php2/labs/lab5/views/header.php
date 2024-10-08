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
    

    <link rel="stylesheet" href="./asset/css/style.css?v=<?php echo time()?>">
    <link rel="stylesheet" href="./asset/css/product.css">
    <link rel="stylesheet" href="./asset/css/login.css">
    <link rel="stylesheet" href="./asset/css/register.css">
    <link rel="stylesheet" href="./asset/css/cart.css">
    <link rel="stylesheet" href="./asset/css/select.css">
    <link rel="stylesheet" href="./asset/css/billcomfirm.css">
    
</head>
<body>
<main>

<header>
    <a href="index.php?controller=home&action=index" class="logo"><i class="fas-fa-untensils"></i>BuiChiBao.</a>
    
    <nav class="navbar">
        <a href="index.php?controller=introduce&action=intro">Giới thiệu</a>
        <a href="index.php?controller=product&action=list">Sản phẩm</a>
        <a href="index.php?controller=product&action=list">Danh mục</a>
        <a href="index.php?controller=contract&action=contract">Liên hệ</a>
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
              <a href="cart.php" class="fas fa-shopping-cart"></a>
              <a href="index.php?page=logout" class='bx bx-log-in' title="Đăng xuất"></a>
              <span>Hello, <?=$username ?></p>
          <?php 
                }
            }?>
    </div>
</header>
