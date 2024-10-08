<section class="menu" id="menu" >
    <div >
        <div style="display: inline-block;">
            <a href="index.php?controller=product&action=add" class="btn" id="addproduct" style="margin-top: 70px;margin-left: 1px;">Thêm mới <i class="fas fa-add"></i></a>
        </div>

        <div style="display: inline-block;">
        <form action="index.php?controller=product&action=list" method="get">
        <!-- <select style="border-radius:0;padding: 5px 45px;background-color:white; border: 2px solid #27ae60;color:#192a56;" class="btn" name="categoryid" id="">
           <option value="0">Tất cả sản phẩm</option>  -->
        <input type="text" name="productName" style="border-radius:0;padding: 5px 45px;background-color:white; border: 2px solid #27ae60;color:#192a56;">
        <input type="submit" name="search" class="btn" value="Tìm kiếm" style="background-color: #27ae60;border-radius:0">    
        </select>
        </form>
        </div>

    </div>

    
    <?php  ?>
    <div class="box-container">
        <?php  
           if(is_array($data)){
            foreach ($data as $product) {
                extract($product); ?>
        <div class="box">
            <div class="image">
                <a href="index.php?controller=product&action=detail&id=<?=$id?>"><img src="./asset/upload/<?=$image?>"/></a>  <!-- ảnh -->
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