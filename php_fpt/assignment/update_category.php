<?php
include 'connect.php';
if(isset($_GET['id'])){
    $id = $_GET['id'];

    $sql = "SELECT * FROM categories WHERE id ='$id'";
    $result = mysqli_query($connect,$sql);

    $row = mysqli_fetch_assoc($result);

   if(isset($_POST['update'])){
         $categoryname = $_POST['categoryname'];
         $createdate = $_POST['createdate'];
         $description = $_POST['description'];
         $userId = $_POST['userId'];


         $sql = "UPDATE categories SET categoryname='$categoryname' ,createdate = '$createdate' ,description = '$description',user_id = '$userId'
                                   WHERE id = '$id'";
        
        mysqli_query($connect,$sql);
        header('location:list_category.php');
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
    <h1 class="sub-heading">Update Category</h1>

    <form action="" method="post">

        <div class="inputBox">
            <div class="input">
                <span>Category name</span>
                <input type="text" name="categoryname" value="<?php echo  $row['categoryname']?>" placeholder="enter your name" required>
            </div>
            <div class="input">
                <span>Create Date</span>
                <input type="date"name="createdate" value="<?php echo  $row['createdate']?>" placeholder="enter your password" required>
            </div>
        </div>

        <div class="inputBox">
            <div class="input">
                <span>Description</span>
                <input type="text"  name="description" value="<?php echo  $row['description']?>" placeholder="enter your password" onkeyup="confrim()" required>
            </div>
            <div class="input">
                <span>User ID</span>
                <input type="number" name="userId" value="<?php echo  $row['user_id']?>" placeholder="extra your number"  required>
            </div>
        </div>



        <input type="submit" value="Save" class="btn" name="update">
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