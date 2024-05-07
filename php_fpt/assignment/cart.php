<?php 
session_start();
include 'connect.php';
    $username = $_SESSION['mysession'];

    $sql = "SELECT * FROM oderdetail JOIN products ON products.id = oderdetail.products_id
                                     JOIN orders on orders.id = oderdetail.orders_id 
                                     JOIN categories on categories.id = products.category_id
                                     WHERE orders.user_id = (SELECT id FROM users WHERE username = '$username')";

    $result = mysqli_query($connect,$sql);

    if(isset($_GET['id'])){
        $product_id = $_GET['id'];
        $sqlid = "SELECT products_id FROM oderdetail WHERE products_id = $product_id";
        $add = mysqli_query($connect,$sqlid);
        if(mysqli_num_rows($add) == 0){

            $id_user = "SELECT id FROM users WHERE username = '$username'";
            $result_id = mysqli_query($connect,$id_user);
            $rowid = mysqli_fetch_assoc($result_id);
            $user_id = $rowid['id'];
            $sql1 = "INSERT INTO orders (user_id) VALUES($user_id)";
            mysqli_query($connect,$sql1);
            $r = mysqli_query($connect,"SELECT MAX(id) as max FROM orders");
            $aaa = mysqli_fetch_assoc($r);
            $abc = (int) $aaa['max'];
            $sql3 = "INSERT INTO oderdetail (orders_id,products_id,quantity) VALUES($abc,$product_id,1)";
            mysqli_query($connect,$sql3);

        }else {
              $sql = "UPDATE oderdetail SET quantity = quantity + 1 WHERE products_id = $product_id";
              mysqli_query($connect,$sql);
        }

      
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

    <link rel="stylesheet" href="../assignment/css/style.css">
    <link rel="stylesheet" href="../assignment/css/cart.css">
</head>
<body>
<header>
    <a href="#" class="logo"><i class="fas-fa-untensils"></i>BuiChiBao.</a>

    <nav class="navbar">
        <a class="active" href="product_user.php">Product</a>
        <a href="">Category</a>
        <a href="">about</a>
        <a href="">menu</a>
        <a href="">review</a>
        <a href="">oder</a>
    </nav>

    <div class="icons">
        <i class="fas fa-bars" id="menu-bars"></i>
        <i class="fas fa-search" id="search-icon"></i>
        <a href="#" class="fas fa-heart"></a>
        <a href="#" class="fas fa-shopping-cart"></a>
    </div>
</header>

<div class="cart convertContent">
    <article>
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
                $total = 0;
                while($row = mysqli_fetch_array($result)){
                   $total = $row['price'] * $row['quantity'];
                ?>

                <div class="title-list">
                    <div class="item">
                        <input type="checkbox">
                    </div>
                    <div class="item">

                        <img style="width: 50%;height:50%;object-fit:cover;" src="../assignment/img/<?php echo $row['image'] ?>"
                             alt="">
                    </div>
                    <div class="item">
                        <div class="title_description">
                            <p><?php echo $row['productname'] ?></p>
                            <p>Fugiat voluptates quasi nemo, ipsa perferendis</p>
                        </div>
                    </div>
                    <div class="item"><?php echo $row['categoryname'] ?></div>  
                    <div class="item">
                        <input type="text" value="<?php echo $row['quantity'] ?>">
                    </div>
                    <div class="item"><?php echo $row['price'] ?></div>
                  
            
                    <div class="item"><i class='bx bx-trash' ></i></div>
                </div>
                
   
             <?php  }?>

            </div>
            <div class="product_container_bill">
                <div class="wrapper_purchase">
                    <div class="purchase">
                        <h1>Cart Totals</h1>
                        <p><span>Subtotal</span><span>
											 <?php echo $total ?></span></p>
                    
                        <p><span>Discount</span><span>
											-0.00</span></p>
                        <div class="horizon-line"></div>
                        <p><span>TOTAL</span><span>
											<?php echo $total ?></span></p>
                    </div>
                    <div class="btn_purchase" style="color: #192a56;">
                        <button>BUY</button>
                    </div>
                </div>

            </div>
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