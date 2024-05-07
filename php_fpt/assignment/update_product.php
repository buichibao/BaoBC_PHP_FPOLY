<?php
include 'connect.php';
if(isset($_GET['id'])){
    $id = $_GET['id'];

    $sql = "SELECT * FROM products WHERE id ='$id'";
    $result = mysqli_query($connect,$sql);

    $row = mysqli_fetch_assoc($result);

   if(isset($_POST['update'])){
         $productname = $_POST['productname'];
         $price = $_POST['price'];
         $description = $_POST['description'];
         $categoryid= $_POST['categoryid'];
         $image = $_FILES['image']['name'];
         $tmp_image = $_FILES['image']['tmp_name'];


         $sql = "UPDATE products SET productname='$productname' ,price = '$price' ,description = '$description',image = '$image',category_id = '$categoryid'
                                   WHERE id = '$id'";                     
        
        mysqli_query($connect,$sql);
        move_uploaded_file($tmp_img,"../assignment/img/".$image);
      
        header('location:product.php');
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
<section class="order" id="order" >

    <h3 class="sub-heading">order now</h3>
    <h1 class="sub-heading">Update Product</h1>

    <form action="" method="post" enctype="multipart/form-data">

        <div class="inputBox">
            <div class="input">
                <span>Product name</span>
                <input type="text" name="productname" value="<?php echo  $row['productname']?>" placeholder="enter your new product name" required>
            </div>
            <div class="input">
                <span>Price</span>
                <input type="number"name="price" value="<?php echo  $row['price']?>" placeholder="enter your new pice" required>
            </div>
        </div>

        
        <div class="inputBox">
            <div class="input">
                <span>Category</span>
            
                <select name="categoryid" >


                    <?php
                      $sql = "SELECT * FROM categories WHERE status = 1";
                      $result = mysqli_query($connect,$sql);

                      while($cate = mysqli_fetch_array($result)){
                      
                    ?>
                    <option value="<?php echo $cate['id'] ?>"> <?php echo $cate['categoryname'] ?> </option>

                    <?php } ?>
                </select>
            </div>
        </div>


        <div class="inputBox">
            <div class="input">
                <span>Description</span>
                <input type="text"  name="description" value="<?php echo  $row['description']?>" placeholder="enter your description"  required>
            </div>
            <div class="input">
                <span>Image</span>
                <input type="file" name="image" value="<?php echo  $row['image']?>"  required>
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