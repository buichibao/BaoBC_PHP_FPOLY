<section class="about" id ="about" style="margin-top: 70px;">
    <h1 class="sub-heading">Sản Phẩm Chi Tiết</h3>
    <?php 

    if(is_array($product)){
        extract($product);
    }
    ?>
    <div class="row">
        <div class="image">
            <img src="upload/<?=$image?>" style="height:480px;margin-top:-25px"/>
        </div>
        <div class="content">
            <h3><?=$product_name?></h3>
             <!-- <h2 style="font-size: 20px;color:orangered;font-weight:bold"><?php echo $row['categoryname'] ?></p> -->
            <div style="margin-top: -60px;">
            <p>Lorem ipsum dolor sit amet consectetur adpisicing elit. Dolore,sequi corrupti
            corporis quaerat voluptatem ipsam neque labore modi autem, saepe numquam quod
            reprehenderit rem? Tempora aut soluta odio corporis nihil!</p>       
            <p>Lorem ipsum dolor sit amet consectetur adpisicing elit. Dolore,sequi corrupti
            corporis quaerat voluptatem ipsam neque labore modi autem, saepe numquam quod
            reprehenderit rem? Tempora aut soluta odio corporis nihil!</p>
            <p>Lorem ipsum dolor sit amet consectetur adpisicing elit. Dolore,sequi corrupti
            corporis quaerat voluptatem ipsam neque labore modi autem, saepe numquam quod
            reprehenderit rem? Tempora aut soluta odio corporis nihil!</p>  
            </div>  
            
            <div class="star">
                <i class="fas fa-star" style="color:#FFCC00 ;font-size: 20px;" ></i>
                <i class="fas fa-star" style="color:#FFCC00 ;font-size: 20px;" ></i>
                <i class="fas fa-star" style="color:#FFCC00 ;font-size: 20px;" ></i>
                <i class="fas fa-star" style="color:#FFCC00 ;font-size: 20px;" ></i>
                <i class="fas fa-star-half-alt" style="color:#FFCC00 ;font-size: 20px;" ></i>
            </div>
            <span style="font-size: 30px;color:orangered;font-weight:bold"> Đơn giá : <?=$price?> VND</span>
            <div class="icons-container">
                <div class="icons">
                    <i class="fas fa-shipping-fast"></i>
                    <span>Delivery</span>
                </div>
                <div class="icons">
                    <i class="fas fa-dollar-sign"></i>
                    <span>Pay</span>
                </div>
                <div class="icons">
                    <i class="fas fa-add"></i>
                    <span>Add to cart</span>
                </div>
            </div>
      
        </div>
    </div>
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $("#comment").load("view/comment/formcomment.php",{idproduct:<?=$id?>})
    });
 </script>


<section class="review" id="review">
    <h3 class="sub-heading">Bình Luận</h3>
    <h1 class="heading">Họ nói gì về sản phẩm chúng tôi</h1>
    <div class="swiper-container review-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide slide">
                <table style="color:#192a56; font-size:15px;border-spacing: 20px;">
                        <tr>
                        <th style="padding:20px;">Người bình luận</th>
                        <th style="padding:20px 300px;">Nội dung</th>
                        <th style="padding:20px;">Thời gian</th>
                        </tr>
                        <?php 
                        if(is_array($listcommnet)){
                        foreach ($listcommnet as $comment) {
                            extract($comment);
                        ?>
                        <tr>
                        <td style="padding:20px;"><?=$username?></td>
                        <td style="padding:20px 300px;"><?=$comment_content?></td>
                        <td style="padding:20px;"><?=$commentdate?></td>
                        </tr>
                         <?php }
                         } ?>
                    </table>
      
                <div id="comment">
                  
            </div>
          </div>
        </div>
    </div>
</section>

<section class="menu" id="menu">
    <h3 class="sub-heading">Sản phẩm cùng loại</h3>
    <div class="box-container">
        <?php  
           if(is_array($listproductsamecategory)){
            foreach ($listproductsamecategory as $product) {
                extract($product); ?>
        <div class="box">
            <div class="image">
                <a href="index.php?page=productdetail&id=<?=$id?>"><img src="upload/<?=$image?>"/></a>  <!-- ảnh -->
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
                <h3><?=$product_name?></h3>    <!-- tên -->
                <p>Lorem ipsum dolor sit amet,consectetur adipisicing elit.Aperam,nemo.Sit   <!-- mô tả -->
                    poro illo.</p>
                <!-- <p style="color:orangered;font-weight:bold" ><?=$category_id?></p>     -->
                
                <span class="pice"><?=$price?> VND</span>   
                <a href="cart.php?id=<?=$id?>" class="btn" style="margin-left: 20px;" name ="add">Thêm vào giỏ hàng</a>
            
            </div>
        </div>
        <?php }
         }
        ?>
        
    </div>
</section>

