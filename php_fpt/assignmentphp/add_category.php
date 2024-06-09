<?php
include 'connect.php';

if(isset($_POST['save'])){

    $categoryname = $_POST['categoryname'];
    $createdate = $_POST['createdate'];
    $description = $_POST['description'];
    $status = $_POST['status'];
    $userid = $_POST['userid'];

    $sql = "SELECT * FROM categories WHERE categoryname ='$categoryname'";
    $result = mysqli_query($connect,$sql);

    
    if(!(mysqli_num_rows($result) == 1)){
        $sql = "INSERT INTO categories(categoryname ,createdate,description,status,user_id)
         values ('$categoryname','$createdate','$description',$status,$userid)";    
         mysqli_query($connect,$sql);
    
         header('location:list_category.php');
       

    }else {
           echo "<script> alert('Tên  $categoryname đã tồn tại'); </script>";
    }

}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Thêm danh mục</title>
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
    <a href="product.php">Sản phẩm</a>
        <a  class="active" href="category.php">Danh mục</a>
        <a href="#about">Voucher</a>
        <a href="#menu">User</a>
        <a href="#review">Đơn hàng</a>
        <a href="#order">Các loại hoá đơn</a>
    </nav>

    <div class="icons">
        <i class="fas fa-bars" id="menu-bars"></i>
        <i class="fas fa-search" id="search-icon"></i>
        <a href="#" class="fas fa-heart"></a>
      
        <a href="logout.php">Đăng xuất</a>
    </div>
</header>


<!--Đăng nhập-->
<section class="order" id="order">
    <h3 class="sub-heading">order now</h3>
    <h1 class="sub-heading">Tạo mới danh mục sản phẩm</h1>
    <form action="" method="post">

        <div class="inputBox">
            <div class="input">
                <span>Tên danh mục</span>
                <input type="text" name="categoryname" placeholder="Nhập tên danh mục" required>
            </div>
            <div class="input">
                <span>Ngày tạo</span>
                <input type="date" name="createdate" placeholder="Chọn ngày tạo" required>
            </div>
        </div>

        <div class="inputBox">
            <div class="input">
                <span>Mô tả danh mục</span>
                <input type="text"   name="description" placeholder="Nhập mô tả"  required>
            </div>
            <div class="input">
                <input type="number" name="status" hidden placeholder="extra your number" value="1" required>
            </div>
        </div>

        <div class="inputBox">  
             <div class="input">
                <span>Admin</span>

                <select name="userid" >
                <?php  
                    $sql = "SELECT * FROM  users WHERE status = 1 and role ='admin'";
                    $result = mysqli_query($connect,$sql); 
                    while($row = mysqli_fetch_array($result)){
                   
                ?>
                    <option value=<?php echo $row['id'] ?>> <?php echo $row['username'] ?> </option>

                <?php  } ?>

            </select>
            </div>
        </div>

        <input type="submit" value="Tạo mới" class="btn" name="save">
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