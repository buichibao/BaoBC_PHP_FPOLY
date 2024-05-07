<?php

$productnameErorr = null;
if(isset($_POST['save'])){
    include 'connect.php';

    $productname = $_POST['productname'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $status = $_POST['status'];
    $category_id = $_POST['category_id'];
    $user_id = $_POST['user_id'];
    $createday = $_POST['createday'];
    $img = $_FILES['img']['name'];
    $img_tmp = $_FILES['img']['tmp_name'];

    $sql = "SELECT * FROM products WHERE productname ='$productname'";
    $result = mysqli_query($connect,$sql);

    if(!(mysqli_num_rows($result) == 1)){
        $sql = "INSERT INTO products(productname ,price,description,status,category_id,user_id,createdate,image)
         values ('$productname','$price','$description',$status,$category_id,$user_id ,'$createday','$img')";
         mysqli_query($connect,$sql);
        
         header('location:product.php');

         move_uploaded_file($tmp_img,"../assignment/img/".$img);

         $productnameErorr = "";
       

    }else {
        $productnameErorr = "Tên sản phẩm đã tồn tại";
    }

}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Thêm sản phẩm</title>
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
    
    <nav class="navbar">
        <a class="active" href="product.php">Sản phẩm</a>
        <a href="list_category.php">Danh mục</a>
        <a href="#about">Voucher</a>
        <a href="#menu">User</a>
        <a href="#review">Đơn hàng</a>
        <a href="#order">Các loại hoá đơn</a>
    </nav>

    <div class="icons">
        <i class="fas fa-bars" id="menu-bars"></i>
        <i class="fas fa-search" id="search-icon"></i>
        <a href="logout.php">Đăng xuất</a>
    </div>
</header>


<!--Đăng nhập-->
<section class="order" id="order">

    <h3 class="sub-heading">order now</h3>
    <h1 class="sub-heading">Tạo mới sản phẩm</h1>

    <form action="" method="post" id="nameForm"  enctype="multipart/form-data">

        <div class="inputBox">
            <div class="input">
                <span>Tên sản phẩm</span>
                <input type="text"  name="productname" placeholder="Nhập tên sản phẩm" required>
                <p style="color:red"> <?php  echo $productnameErorr ?></p>
        
            </div>
            <div class="input">
                <span>Giá</span>
                <input type="text"  name="price" placeholder="Nhập giá bán" required>
            </div>
        </div>

        <div class="inputBox">
            <div class="input">
                <span>Mô tả</span>
                <input type="text"   name="description" placeholder="Mô tả về sản phẩm" required>
                <p id="passError"></p>

            </div>
            <div class="input">
                <input type="number" name="status" hidden  value="1" required>
            </div>
        </div>

        <div class="inputBox">  
             <div class="input">
                <span>Danh mục sản phẩm</span>
                <select name="category_id">
                <?php 
                 include 'connect.php';
                $sql = "SELECT * FROM categories WHERE status = 1";
                $result = mysqli_query($connect,$sql);
                while($cate = mysqli_fetch_array($result)){
                ?>
                <option value= <?php echo $cate['id'] ?> ><?php echo $cate['categoryname'] ?></option>
                <?php } ?>

               </select>
            </div>
            <div class="input">
                <span>Ngày tạo</span>
                <input type="date" name="createday" placeholder="enter your user id" required>
            </div>
             
               </select>
            </div>
        </div>
      
        <div class="inputBox">  
        <div class="input">
                <span>Người tạo</span>
                <select name="user_id">
                <?php 
                 include 'connect.php';
                $sql = "SELECT * FROM users WHERE status = 1 and role ='admin'";
                $result = mysqli_query($connect,$sql);
                while($us = mysqli_fetch_array($result)){
                ?>
                <option value=<?php echo $us['id'] ?>><?php echo $us['username'] ?></option>
                <?php } ?>

            <div class="input">
                <span>Image</span>
                <input type="file"  name="img" placeholder="Chọn hình ảnh sản phẩm" required>
            </div>
        </div>
        

        <input type="submit" value="Thêm mới" class="btn" name="save">
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