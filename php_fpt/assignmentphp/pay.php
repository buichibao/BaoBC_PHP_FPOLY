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
    for($i = 0 ; $i < count($_SESSION['list_product']) ; $i++){
        $product_id =$_SESSION['list_product'][$i];
        $sql = "SELECT * FROM cart join products on products.id = cart.product_id
        join users on  users.id = cart.user_id
        join categories on  categories.id = products.category_id
        where cart.user_id = (SELECT id FROM users where username = '$username') and cart.product_id = $product_id";
        
        $result_cart = mysqli_query($connect,$sql);
        
    }
    


    if(isset($_POST['pay'])){
        $address = $_POST['address'];
        $phonenumber = $_POST['phonenumber'];
        $note = $_POST['note'];
        $user_id_in_cart = mysqli_query($connect,"SELECT * FROM bill where user_id = '$user_id'");
        
        if(mysqli_num_rows($user_id_in_cart) != 0){
            $bill = "UPDATE bill SET address = '$address',phone_number = '$phonenumber',note ='$note' where user_id = $user_id";
            mysqli_query($connect,$bill);
        }else {
           $bill = "INSERT INTO bill (user_id, address, phone_number,note) VALUES ('$user_id','$address','$phonenumber','$note')";
           mysqli_query($connect,$bill);
        }
       
        header("location:bill.php");
    }
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="../assignment/css/style.css">
    <link rel="stylesheet" href="../assignmentphp/css/cart.css">
</head>
<body>
<header>
    <a href="#" class="logo"><i class="fas-fa-untensils"></i>BuiChiBao.</a>

    <nav class="navbar">
        <a class="active" href="product_user.php">Sản phẩm</a>
        <a href="">Danh mục</a>
        <a href="">about</a>
        <a href="">menu</a>
        <a href="">review</a>
        <a href="">oder</a>
    </nav>

    <div class="icons">
        <i class="fas fa-bars" id="menu-bars"></i>
        <i class="fas fa-search" id="search-icon"></i>
        <a href="#" class="fas fa-heart"></a>
        <a href="cart.php" class="fas fa-shopping-cart"></a>
        <a href="logout.php">Đăng xuất</a>
    </div>
</header>

<div class="cart convertContent">
    <article>
        <form action="" method="post" enctype="multipart/form-data">
        <div class="grid">
            <div class="product_container">
                <div class="title">
                    
                    <div class="item">Hình ảnh</div>
                    <div class="item">Tên sản phẩm</div>
                    <div class="item">Danh mục</div> 
                    <div class="item">Giá</div>
                    <div class="item">Số lượng</div>
                    <div class="item">Tổng tiền</div>  
                </div>
                <?php 
                  $total_price = 0;
                  for($i = 0 ; $i < count($_SESSION['list_product']) ; $i++){
                    $product_id =$_SESSION['list_product'][$i];
                    $sql = "SELECT * FROM cart join products on products.id = cart.product_id
                    join users on  users.id = cart.user_id
                    join categories on  categories.id = products.category_id
                    where cart.user_id = (SELECT id FROM users where username = '$username') and cart.product_id = $product_id";
                    
                    $result_cart = mysqli_query($connect,$sql);

                    $row = mysqli_fetch_array($result_cart);
                    
                    $total_price += $row['price']*$row['quantity'];
            
                ?>
                <div class="title-list">
                   
                    <div class="item">

                        <img style="width: 50%;height:50%;object-fit:cover;" src="../assignmentphp/img/<?php echo $row['image'] ?>" alt="">
                    </div>
                    <div class="item">
                        <div class="title_description">
                            <p><?php echo $row['productname'] ?></p>
                            <p></p>
                        </div>
                    </div>
                    <div class="item"><?php echo $row['categoryname'] ?></div>
                      <div class="item"><?php echo $row['price'] ?></div>
                    <div class="item">  
                       <?php echo $row['quantity'] ?>
                    </div>
                    <div class="item">  
                       <?php echo $row['quantity'] * $row['price'] ?>
                    </div>
                    
                  
                </div>

                <?php }?>
              
            </div>
            <div class="product_container_bill">
                <div class="wrapper_purchase">
                <div class="purchase">
                    <h1>Address</h1> 
                    <h1 style="font-size: 15px;">Địa chỉ</h1><h1><input type="text" name="address" style=" border: 1px solid #ccc;width: 500px;height:100x" require></h1>
                    <h1 style="font-size: 15px;">Số địa thoại</h1><h1><input type="text" name="phonenumber" style=" border: 1px solid #ccc;width: 500px;height:100x" require></h1>
                    <h1 style="font-size: 15px;">Ghi chú</h1><h1><input type="text" name="note" style=" border: 1px solid #ccc;width: 500px;height:100x" require></h1>
                </div>
                </div>
                <div class="wrapper_purchase">
                    <div class="purchase">
                        <h1>Hoá đơn</h1>
                        <div class="horizon-line"></div>
                        <p><span>Tổng tiền</span></span><span>
											<?php echo $total_price ?></span></p>
                        <p><span>Giảm giá</span><span>-0.00</span></p><div class="horizon-line"></div>
                        <p><span>Số tiền cần trả</span></span><span><?php echo $total_price ?></span></p>
                        <p><span style="color:red">*Xác nhận địa chỉ và số tiền trước khi đặt hàng</span></span><span></span></p>
                                            
                    </div>
                    <div class="btn_purchase" style="color: #192a56;">
                        <button type="submit" name="pay">Thanh toán</button>
                    </div>
                </div>
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