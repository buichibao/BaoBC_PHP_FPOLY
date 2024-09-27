<form action=""  id="search-form">
    <input type="text" placeholder="search here..." name="" id="search-box">
    <label for="search-box" class="fas fa-search"></label>
    <i class="fas fa-times" id="close"></i>
</form>


<section class="menu" id="menu" >
    <div >
        <div style="display: inline-block;">
            <a href="index.php?page=addproduct" class="btn" id="addproduct" style="margin-top: 70px;margin-left: 1px;">Thêm mới <i class="fas fa-add"></i></a>
        </div>

        <div style="display: inline-block;">
        <form action="index.php?page=searchproductbycategoryid" method="post">
        <select style="border-radius:0;padding: 5px 45px;background-color:white; border: 2px solid #27ae60;color:#192a56;" class="btn" name="categoryid" id="">
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

    </div>

    
    <?php  ?>
    <div class="box-container">
      <?php 
          foreach ($listproduct as $product) {
             extract($product); ?>
    
        <div class="box">
            <div class="image">
                <img src="../upload/<?=$image?>"/>  <!-- ảnh -->
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
                <h3><?=$product_name  ?></h3>    <!-- tên -->
                <p>Lorem ipsum dolor sit amet,consectetur adipisicing elit.Aperam,nemo.
                    Sit poro illo.</p>
                <p style="color:orangered;font-weight:bold" ><?php  ?></p>    
                
                <span class="pice"><?=$price?>VND</span><br> 
                <a href="index.php?page=deleteproduct&id=<?=$id?>" class="btn" style="background-color:red;">Xoá</a>
                <a href="index.php?page=updateproduct&id=<?=$id?>" class="btn">Chỉnh sửa</a>   
            </div>
        </div>
      
      <?php  } ?>    
    </div>
</section>