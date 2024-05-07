
<?php
session_start();
if(!isset($_SESSION['mysession'])){
    header('location:login.php');
}
include 'connect.php';

// $sql = "SELECT * FROM categories WHERE status = 1";

$sql = "SELECT categories.id as c_id,categoryname,categories.createdate,username FROM categories INNER JOIN users ON users.id = categories.user_id WHERE categories.status = 1";

$result = mysqli_query($connect,$sql);



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Giỏ Hàng</title>
    <link rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="../assignment/css/style.css">
    <link rel="stylesheet" href="../assignment/css/cart.css">
</head>
<body>
<header>
    <a href="#" class="logo"><i class="fas-fa-untensils"></i>BuiChiBao.</a>

    <nav class="navbar">
        <a href="product.php">Sản phẩm</a>
        <a class="active" href="list_category.php">Danh mục</a>
        <a href="">Voucher</a>
        <a href="">Người dùng</a>
        <a href="">Đơn Hàng</a>
        <a href="">Các loại hoá đơn</a>
    </nav>

    <div class="icons">
        <i class="fas fa-bars" id="menu-bars"></i>
        <i class="fas fa-search" id="search-icon"></i>
        <a href="logout.php">Đăng xuất</a>
    </div>
</header>

<div class="cart convertContent">
    <article>
        <div class="grid">
            <div class="product_container">
                <div class="title">
                    <div class="item"></div>
                    <div class="item">ID</div>
                    <div class="item">Tên danh mục</div>
                    <div class="item">Ngày tạo</div>
                    <div class="item">Người tạo</div>
                    <div class="item">Chỉnh sửa</div>
                    <div class="item">Xoá</div>

                </div>
                <?php 
                   while($row = mysqli_fetch_array($result)){
                   
                ?>
                <div class="title-list">
                    <div class="item"></div>
                    <div class="item"><?php echo $row['c_id'] ?></div>
                    <div class="item"><?php echo $row['categoryname'] ?></div>
                    <div class="item"><?php echo $row['createdate'] ?></div>
                    <div class="item"><?php echo $row['username'] ?></div>
                    <div class="item"><a href="update_category.php?id=<?php echo $row['c_id'] ?>"><i class='bx bx-pencil'></i></a></div>
                    <div class="item"><a href="delete_category.php?id=<?php echo $row['c_id'] ?>"><i class='bx bx-trash'></i></a></div>
                  
                    
                </div>

                <?php } ?>
                  <div class="item"><a href="add_category.php"><input type="submit" value="Tạo mới danh mục" class="btn" name="addcategory"></a></div>
        </div>
    </article>
</div>
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

</body>
</html>