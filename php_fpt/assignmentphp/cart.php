<?php 
session_start();
if(!isset($_SESSION['mysession'])){
    header('location:login.php');
}
include 'connect.php';
    $username = $_SESSION['mysession'];
    $user_id_session = mysqli_query($connect,"SELECT id FROM users where username = '$username'");
    while($row = mysqli_fetch_assoc($user_id_session)){
       $user_id = $row['id'];
    }

    if(isset($_GET['id'])){
        $id_product_add = $_GET['id'];
        $product_in_cart = "SELECT * FROM cart where product_id = $id_product_add and cart.user_id = $user_id";
        $product_list_cart = mysqli_query($connect,$product_in_cart);
        if(mysqli_num_rows($product_list_cart) == 1){
        
           mysqli_query($connect,"UPDATE cart SET quantity = quantity + 1 where product_id = $id_product_add");
           echo "<script>alert('Thêm thành công vào giỏ hàng');</script>";
     
        }else {
            mysqli_query($connect,"INSERT INTO cart (product_id,user_id,quantity)
            VALUES ($id_product_add,$user_id,1);");
            echo "<script>alert('Thêm thành công vào giỏ hàng');</script>";
        }
    }

        $cart = "SELECT * FROM cart join products on products.id = cart.product_id
        join users on  users.id = cart.user_id
        join categories on  categories.id = products.category_id
        where cart.user_id = (SELECT id FROM users where username = '$username')";
        

    if(isset($_POST['update_cart'])){
        $result_cart = mysqli_query($connect,$cart); 
      
        for($i = 0 ; $i < count($_POST['product_id']) ;$i++){
            $product_id = $_POST['product_id'][$i];
            $quantity = $_POST['quantity'][$i];
            $update_cart = mysqli_query($connect,"UPDATE cart SET quantity = $quantity WHERE product_id = $product_id and user_id = $user_id");
            
        }
        echo "<script>alert('Cập nhập thành công');</script>";
    }


    if(isset($_POST['pay'])){ 
        $_SESSION['list_product'] =  $_POST['checked_product'];
        if (empty($_SESSION['list_product'])) {
            echo "<script>alert('Bạn chưa chọn sản phẩm cần thanh toán');</script>";
        } else {
           header("location:pay.php");
        }
        
    }

   
    $result_cart = mysqli_query($connect,$cart);
   

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
        <a href="product_user.php">Sản phẩm</a>
        <a href="">Danh mục</a>
        <a href="">Voucher</a>
        <a href="">menu</a>
        <a href="">Đối tác</a>
        <a href="">Gọi món</a>
    </nav>

    <div class="icons">
        <i class="fas fa-bars" id="menu-bars"></i>
        <i class="fas fa-search" id="search-icon"></i>
        <a href="#" class="fas fa-heart"></a>
        <a href="#" class="fas fa-shopping-cart active"></a>
        <a href="logout.php">Đăng xuất</a>
    </div>
</header>

<div class="cart convertContent">
    <article>
        <form action="cart.php" method="post" enctype="multipart/form-data">
        <div class="grid">
            <div class="product_container">
                <div class="title">
                    <div class="item"></div>
                    <div class="item"></div>
                    <div class="item">Product</div>
                    <div class="item">Category</div>
                    <div class="item">Quantity</div>
                    <div class="item">Price</div>
                    
                    <div class="item"></div>

                </div>
                <?php 
                  $total_price = 0;
                  while($row = mysqli_fetch_array($result_cart)){
                  $total_price += $row['price']*$row['quantity'];  
                ?>
                <div class="title-list">
                    <div class="item">
                        <input type="checkbox" name="checked_product[]" value="<?php echo $row['product_id'] ?>">
                    </div>
                    <div class="item">

                        <img style="width: 50%;height:50%;object-fit:cover;" src="../assignmentphp/img/<?php echo $row['image'] ?>" alt="">
                    </div>
                    <div class="item">
                        <div class="title_description">
                            <p><?php echo $row['productname'] ?></p>
                            <p>Fugiat voluptates quasi nemo, ipsa perferendis</p>
                        </div>
                    </div>
                    <div class="item"><?php echo $row['categoryname'] ?></div>  
                    <div class="item">
                        <input type="text" name="product_id[]" value="<?php echo $row['product_id'] ?>" hidden>
                        <input type="text" name="quantity[]" value="<?php echo $row['quantity'] ?>">
                    </div>
                    <div class="item"><?php echo $row['price'] ?></div>
                  
            
                    <div class="item"><i class='bx bx-trash' ></i></div>
                </div>

                <?php }?>
                <button class="btn" name="update_cart" style="margin-left: 1220px ; ">Cập nhật số lượng</button>
                <button class="btn" name="pay" id="pay" style="background-color: rgb(183, 71, 42);padding-left:50px;padding-right:50px"  > Thanh toán </button>

            </div>
       
        </div>
    </form>
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