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

    $a = mysqli_num_rows($result) == 1;

    

    
    if(!(mysqli_num_rows($result) == 1)){
        $sql = "INSERT INTO products(productname ,price,description,status,category_id,user_id,createdate,image)
         values ('$productname','$price','$description',$status,$category_id,$user_id ,'$createday','$img')";
         mysqli_query($connect,$sql);
        
         header('location:product.php');

         move_uploaded_file($tmp_img,"../assignment/img/".$img);

         $productnameErorr = "";
       

    }else {
        $productnameErorr = "Product Name đã tồn tại";
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
    <a href="#" class="logo"><i class="fas-fa-untensils"></i>resto.</a>
    
    <nav class="navbar">
        <a class="active" href="#home">home</a>
        <a href="#dishes">dishes</a>
        <a href="#about">about</a>
        <a href="#menu">menu</a>
        <a href="#review">review</a>
        <a href="#order">oder</a>
    </nav>

    <div class="icons">
        <i class="fas fa-bars" id="menu-bars"></i>
        <i class="fas fa-search" id="search-icon"></i>
        <a href="#" class="fas fa-heart"></a>
        <a href="#" class="fas fa-shopping-cart"></a>
        <a href="logout.php">Đăng xuất</a>
    </div>
</header>


<!--Đăng nhập-->
<section class="order" id="order">

    <h3 class="sub-heading">order now</h3>
    <h1 class="sub-heading">Create Product</h1>

    <form action="" method="post" id="nameForm"  enctype="multipart/form-data">

        <div class="inputBox">
            <div class="input">
                <span>Product name</span>
                <input type="text"  name="productname" placeholder="enter your product name" required>
                <p style="color:red"> <?php  echo $productnameErorr ?></p>
        
            </div>
            <div class="input">
                <span>Price</span>
                <input type="text"  name="price" placeholder="enter price of product" required>
            </div>
        </div>

        <div class="inputBox">
            <div class="input">
                <span>Description</span>
                <input type="text"   name="description" placeholder="enter description" required>
                <p id="passError"></p>

            </div>
            <div class="input">
                <input type="number" name="status" hidden  value="1" required>
            </div>
        </div>

        <div class="inputBox">  
             <div class="input">
                <span>Categoty</span>
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
                <span>Create Date</span>
                <input type="date" name="createday" placeholder="enter your user id" required>
            </div>
             
               </select>
            </div>
        </div>
      
        <div class="inputBox">  
        <div class="input">
                <span>Admin</span>
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
                <input type="file"  name="img" placeholder="enter your user id" required>
            </div>
        </div>
        

        <input type="submit" value="Register" class="btn" name="save">
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