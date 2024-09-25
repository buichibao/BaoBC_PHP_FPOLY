<form action=""  id="search-form" method="get">
    <input type="text" placeholder="search here..." name="productName" id="search-box">
   
    <i class="fas fa-times" id="close"></i>
    <button type="submit" name="search" style="background: none;"> <label for="search-box" class="fas fa-search"></label></button>
</form>

<section class="home" id="home">
    <div class="swiper-container home-slider">
        <div class="swiper-wrapper wrapper">
            <div class="swiper-slide slide">
                <div class="content">
                    <span>our spacial dish</span>
                    <h3>spicy noodles</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.Sit natus dolor cumque?</p>
                    <a href="#" class="btn">oder now</a>
                </div>
                <div class="image">
                    <img src="https://khoinguonsangtao.vn/wp-content/uploads/2022/10/hinh-anh-ga-ran.jpg"  height="680px" alt="">

                </div>
            </div>
            <div class="swiper-slide slide">
                <div class="content">
                    <span>our spacial dish</span>
                    <h3>spicy noodles</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.Sit natus dolor cumque?</p>
                    <a href="#" class="btn">oder now</a>
                </div>
                <div class="image">
                    <img src="https://api-omni.mutosi.com/v0/s3/view/nuoc-cam-tot-cho-suc-khoe.jpg"  height="680px" alt="" >
                </div>
            </div>
            <div class="swiper-slide slide">
                <div class="content">
                    <span>our spacial dish</span>
                    <h3>spicy noodles</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.Sit natus dolor cumque?</p>
                    <a href="#" class="btn">oder now</a>
                </div>
                <div class="image">
                    <img src="https://hangngoainhap.net.vn/upload/news/nh-bia-7732.PNG" height="680px" alt="">

                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</section>

<section class="menu" id="menu">
    <h1 class="heading">Hôm nay ăn gì?</h1> 
    <div>
        <form action="index.php?page=searchproductbycategoryid" method="post">
        <select style="border-radius:0;padding: 5px 45px;margin:10px 0px 10px 850px;background-color:white; border: 2px solid #27ae60;color:#192a56;" class="btn" name="categoryid" id="">
           <option value="0">Tất cả sản phẩm</option> 
           <?php 
               foreach ($listcategory as $category) {
                     extract($category);
                     echo "<option value=".$id.">$category_name</option>";
               }
            ?>
        <input type="submit" name="search" class="btn" value="Tìm kiếm" style="background-color: #27ae60;border-radius:0">    
        </select>
    </form>
    </div>
    <div class="box-container">
       
        <?php  
           if(is_array($listproduct)){
            foreach ($listproduct as $product) {
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
                <h3><?=$product_name?> </h3>  <span>Số người xem : <?=$view?></span>  <!-- tên -->
                <p>đặt hàng ngay , để nhận được ưu đãi hấp dẫn.</p>
                <!-- <p style="color:orangered;font-weight:bold" ><?=$category_id?></p>     -->
                
                <span class="pice"><?=$price?> VND</span>   
                <form action="index.php?page=addtocart" method="post">
                    <input type="hidden"  name="id" value="<?php echo $id?>">
                    <input type="hidden"  name="productname" value="<?php echo $product_name?>">
                    <input type="hidden"  name="price" value="<?php echo $price?>">
                    <input type="submit" name="add" class="btn" value="Thêm vào giỏ hàng">
                </form>
                
            
            </div>
        </div>
        <?php }
         }
        ?>
        
    </div>
</section>



<section class="menu" id="menu">
    <h3 class="sub-heading">Sản Phẩm Được Yêu Thích</h3>
    <h1 class="heading">Top 10</h1>
    <div class="box-container">
        <?php  
           if(is_array($listtop10)){
            foreach ($listtop10 as $product) {
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
                <h3><?=$product_name?> </h3>  <span>Số người xem : <?=$view?></span>  <!-- tên -->
                <p>đặt hàng ngay , để nhận được ưu đãi hấp dẫn.</p>
                <!-- <p style="color:orangered;font-weight:bold" ><?=$category_id?></p>     -->
                
                <span class="pice"><?=$price?> VND</span>   
                <form action="index.php?page=addtocart" method="post">
                    <input type="hidden"  name="id" value="<?php echo $id?>">
                    <input type="hidden"  name="productname" value="<?php echo $product_name?>">
                    <input type="hidden"  name="price" value="<?php echo $price?>">
                    <input type="submit" name="add" class="btn" value="Thêm vào giỏ hàng">
                </form>
            
            </div>
        </div>
        <?php }
         }
        ?>
        
    </div>
</section>