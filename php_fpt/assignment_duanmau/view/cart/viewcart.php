<?php 
   if(!isset($_SESSION['user'])){
    header('location:index.php?page=login');
   }

?>

<div class="cart convertContent">
    <article>
        <form action="index.php?page=updatequantity" method="post" enctype="multipart/form-data">
        <div class="grid">
            <div class="product_container">
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
                    <input type="text" name="productid[]" value="<?=$cart[0]?>">
                    </div> 
                    <div class="item">
                        <div class="title_description">
                            <p><?=$cart[1]?></p>
                        </div>
                    </div>
                    <div class="item"></div>
                    <div class="item">
                        <input type="text" name="quantity[]" value="<?=$cart[3]?>">
                    </div>
                    <div class="item"> <p><?=$cart[2]?></p></div>
                    <div class="item"> <p><?=$cart[4]?></p></div>
                    <div class="item"><a href="index.php?page=deletecart&idcart=<?php echo $index?>"><i class='bx bx-trash' ></i></a></div>
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
                    <div class="item"><input type="submit" class="btn" name="update" value="Cập nhật số lượng"></a></div>
                    <div class="item"><a href="index.php?page=bill"><input type="button" class="btn" name="oder" value="Đặt hàng"></a></div>
                    <div class="item"><a href="index.php?page=deletecart"><input style="background-color: red;" type="button" class="btn" value="Xoá giỏ hàng"></a></div>
                   
                </div>
                
     

            </div>
       
        </div>
    </form>
    </article>
</div>