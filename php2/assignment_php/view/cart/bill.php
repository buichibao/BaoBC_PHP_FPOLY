<?php 
   if(!isset($_SESSION['user'])){
    header('location:index.php?page=login');
   }

?>

<div class="cart" style="margin-top: -50px;">
    <article>
        <form action="index.php?page=billcomfirm" method="post" enctype="multipart/form-data">
        <section class="order" id="order">
        <h1 class="sub-heading">Xác nhận thông tin đơn hàng</h1>
        <div class="inputBox">
            <div class="input">
                <span style="font-size: 1.6rem;font-weight:bold">Tên tài khoản :</span>
                <input style="font-size: 1.6rem" size="100" type="text" name="username"  value="<?php echo $_SESSION['user']['username'] ?>">
            </div>
        </div>
        <div class="inputBox" style="margin-top:10px">
            <div class="input">
            <span style="font-size: 1.6rem;font-weight:bold;margin-top:12px">Email :</span>
                <input  style="font-size: 1.6rem" size="100" type="email"  name="email"   value="<?php echo $_SESSION['user']['email'] ?>">
            </div>
            <div class="input" style="margin-top:10px"> 
            <span style="font-size: 1.6rem;font-weight:bold">Địa chỉ :</span>
                <input style="font-size: 1.6rem" size="100" type="text" name="address"   value="<?php echo $_SESSION['user']['address'] ?>">
            </div>
            <div class="input" style="margin-top:10px"> 
            <span style="font-size: 1.6rem;font-weight:bold">Số điện thoại :</span>
                <input  style="font-size: 1.6rem" size="100" type="text" name="phone_number"   value="<?php echo $_SESSION['user']['phone_number'] ?>">
            </div>
            <div class="input" style="margin-top:10px"> 
            <span style="font-size: 1.6rem;font-weight:bold">Phương thức thanh toán :</span>
                <input  type="radio" name="pay" value="1" checked> <span  style="font-size: 1.6rem;"> Thanh Toán khi nhận hàng.</span>
                <input  type="radio" name="pay" value="2">         <span  style="font-size: 1.6rem">Thanh Toán chuyển khoản.</span>
                <input  type="radio" name="pay" value="3">         <span  style="font-size: 1.6rem">Thanh Toán Online.</span>
            </div>
        </div>
    </section> 
        
        <div class="grid">
            <div class="product_container" >
                <div class="title">
                    <div class="item"></div>
                    <div class="item">Mã sản phẩm</div>
                    <div class="item">Tên sản phẩm</div>
                    <div class="item"></div>
                    <div class="item">Số lượng</div>
                    <div class="item">Đơn giá</div>
                    <div class="item">Tổng</div>
                </div>
                <?php 
                $sum = 0;
                $index = 0;
                foreach ($_SESSION['mycart'] as $cart) { 
                    $sum += $cart[4];
                ?>
                <div class="title-list">
                    <div class="item"></div>
                    <div class="item">
                    <input type="text" name="checked_id[]" value="<?=$cart[0]?>">
                    </div> 
                    <div class="item">
                        <div class="title_description">
                            <p><?=$cart[1]?></p>
                        </div>
                    </div>
                    <div class="item">
                        <!-- <img style="width: 50%;height:50%;object-fit:cover;" src="../../upload/<?=$cart[2]?>" alt=""> -->
                    </div>
                   
                    <div class="item">
                        <input type="text" name="quantity[]" value="<?=$cart[3]?>" disabled>
                    </div>
                    <div class="item"> <p><?=$cart[2]?></p></div>
                    <div class="item"> <p><?=$cart[4]?></p></div>
                   
                </div>
                <?php  
                  $index += 1;
                } ?>
                <div class="title-list">
                    <div class="item"></div>
                    <div class="item">Tổng tiền</div>
                    <div class="item"></div>
                    <div class="item"></div>
                    <div class="item"></div>
                    <div class="item"></div>
                    <div class="item"><?php echo $sum?></div>
                </div>
                <div class="title-list">
                    <div class="item"></div>
                    <div class="item"></div>
                    <div class="item"></div>
                    <div class="item"></div>
                     <div class="item"></div>
                     <div class="item"></div>
                    <div class="item"><a href="index.php?page=bill"><input type="submit" class="btn" name="oder" value="Xác Nhận"></a></div>
                  
                </div>
                
     

            </div>
       
        </div>
    </form>
    </article>
</div>