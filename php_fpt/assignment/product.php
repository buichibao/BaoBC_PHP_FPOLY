<?php
session_start();
if(!isset($_SESSION['mysession'])){
    header('location:login.php');
}
include 'connect.php';

?>

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

    <link rel="stylesheet" href="../assignment/css/style.css">
    <link rel="stylesheet" href="../assignment/css/product.css">
    
</head>
<body>
<main>

<header>
    <a href="" class="logo"><i class="fas-fa-untensils"></i>BuiChiBao.</a>
    
    <nav class="navbar">
        <a class="active" href="#home">Product</a>
        <a href="list_category.php">category</a>
        <a href="">dishes</a>
        <a href="">menu</a>
        <a href="">review</a>
        <a href="">oder</a>
    </nav>

    <div class="icons">
        <i class="fas fa-bars" id="menu-bars"></i>
        <i class="fas fa-search" id="search-icon"></i>
        <a href="logout.php">Đăng xuất</a>
    </div>
</header>

<!--search form-->

<form action=""  id="search-form">
    <input type="text" placeholder="search here..." name="" id="search-box">
    <label for="search-box" class="fas fa-search"></label>
    <i class="fas fa-times" id="close"></i>
</form>

<!--dishes section-->
<!-- <section class="dishes" id="dishes">
    <h3 class="sub-heading">our dishes</h3>
    <h3 class="sub-heading">our dishes</h3>
    <h1 class="heading">popular dishes</h1>
    
    <div class="box-container">
        <div class="box">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-eye"></a>
            <img src="https://i.pinimg.com/236x/00/4d/ae/004dae07b47f7f00f35a98961db5000a.jpg" />
            <h3>tasty food</h3>
            <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <span>$15.99</span>
            <a href="#" class="btn">add to cart</a>
        </div>
        <div class="box">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-eye"></a>
            <img src="https://i.pinimg.com/236x/a6/cf/80/a6cf802c94622a9079f9d55653aa84c3.jpg"/>
            <h3>tasty food</h3>
            <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <span>$15.99</span>
            <a href="#" class="btn">add to cart</a>
        </div>
        <div class="box">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-eye"></a>
            <img src="https://i.pinimg.com/236x/bd/15/c8/bd15c81a13e2e6ac5071fd37d13e0014.jpg"/>
            <h3>tasty food</h3>
            <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <span>$15.99</span>
            <a href="#" class="btn">add to cart</a>
        </div>
        <div class="box">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-eye"></a>
            <img src="img/h5.jpg" />
            <h3>tasty food</h3>
            <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <span>$15.99</span>
            <a href="#" class="btn">add to cart</a>
        </div>
        <div class="box">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-eye"></a>
            <img src="https://i.pinimg.com/236x/da/67/89/da67897707e9ce8d9327cb4e9649b3f2.jpg"/>
            <h3>tasty food</h3>
            <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <span>$15.99</span>
            <a href="#" class="btn">add to cart</a>
        </div>
        <div class="box">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-eye"></a>
            <img src="https://i.pinimg.com/236x/4f/11/36/4f1136a1af5fbca73d02f6fc6f2b23ac.jpg" />
            <h3>tasty food</h3>
            <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <span>$15.99</span>
            <a href="#" class="btn">add to cart</a>
        </div>
    </div>
</section> -->
<!-- menu-->
<section class="menu" id="menu">
    <h3 class="sub-heading">our menu</h3>
    <h3 class="sub-heading">our menu</h3>
    <h1 class="heading">today's speciality</h1>
    <a href="add_product.php" class="btn" id="addproduct">Add Product <i class="fas fa-add"></i></a>
    
    <div class="box-container">
        <?php  
          $sql = "SELECT productname,categoryname,image,price,products.id as p_id FROM products JOIN categories ON products.category_id = categories.id WHERE products.status = 1 and categories.status = 1";
          $result = mysqli_query($connect,$sql);
          while($row = mysqli_fetch_array($result)){
        ?>
        <div class="box">
            <div class="image">
                <img src="../assignment/img/<?php echo $row['image'] ?>"/>  <!-- ảnh -->
                <a href="" class="fas fa-heart"></a>
            </div>
            <div class="content">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3><?php echo $row['productname'] ?></h3>    <!-- tên -->
                <p>Lorem ipsum dolor sit amet,consectetur adipisicing elit.Aperam,nemo.Sit   <!-- mô tả -->
                    poro illo.</p>
                <p style="color:orangered;font-weight:bold" ><?php echo $row['categoryname'] ?></p>    
                
                <span class="pice">$ <?php echo $row['price'] ?></span>   
                <a href="delete_product.php?id=<?php echo $row['p_id'] ?>" class="btn" style="background-color:red; margin-left:65px">Delete</a>
                <a href="update_product.php?id=<?php echo $row['p_id'] ?>" class="btn">Update</a>   
            </div>
        </div>
        <?php } ?>
        
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
<script src="script.js"></script>
</body>
</html>