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
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="../css/style.css?v=<?php echo time()?>">
    <link rel="stylesheet" href="../css/product.css?v=<?php echo time()?>">
    <link rel="stylesheet" href="../css/login.css?v=<?php echo time()?>">
    <link rel="stylesheet" href="../css/register.css?v=<?php echo time()?>">
    <link rel="stylesheet" href="../css/cart.css?v=<?php echo time()?>">
    
</head>
<body>
<main>

<header>
    <a href="" class="logo"><i class="fas-fa-untensils"></i>BuiChiBao.</a>
    
    <nav class="navbar">
        <a href="index.php?page=listproduct">Sản phẩm</a>
        <a href="index.php?page=listcategory">Danh mục</a>
        <a href="index.php?page=listaccount">Khách hàng</a>
        <a href="index.php?page=listcomment">Bình Luận</a>
        <a href="index.php?page=listbill">Đơn Hàng</a>
        <a href="index.php?page=statistical">Thống Kê</a>
    </nav>

    <div class="icons">
        <i class="fas fa-bars" id="menu-bars"></i>
       
        <i class="fas fa-search" id="search-icon"></i>

        <a href="index.php?page=logoutadmin" class='bx bx-log-in' title="Đăng xuất"></a>
    </div>
</header>
