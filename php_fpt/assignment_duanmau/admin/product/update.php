<section class="order" id="order" style="margin-top: 50px;">

    <h3 class="sub-heading">BuiChiBao</h3>
    <h1 class="sub-heading">Cập nhật sản phẩm</h1>

    <form action="index.php?page=saveupdateproduct" method="post"   enctype="multipart/form-data">
       <?php 
          if(is_array($product)){
            extract($product);
          }
       ?>
        <div class="inputBox">
            <div class="input">
                <span>Tên sản phẩm</span>
                <input type="text"  name="productname" placeholder="Nhập tên sản phẩm" value="<?=$product_name?>" required>
                <input type="text"  name="id"  value="<?=$id?>" hidden>
               
            </div>
            <div class="input">
                <span>Giá</span>
                <input type="text"  name="price" placeholder="Nhập giá bán" value="<?=$price?>" required>
            </div>
        </div>

        <div class="inputBox">  
            <div class="input">
                <span>Hình ảnh</span>
                <?php
                    $imagepath = "../upload/".$image;
                    if(is_file($imagepath)){ ?>
                    <img src="<?php echo $imagepath?>" alt="" width="80">
                    <?php }else{ echo "no photo"  ?>
                <?php }?>
                <input type="file"  name="image"  >
            </div>
            <div class="input">
                <span>Mô tả</span>
                <input type="text"  name="description" placeholder="Nhập mô tả" value="<?=$description?>" required>
            </div>
        </div>

        <div class="inputBox">
            <div class="input">
                <span>Danh mục</span>
                <select name="categoryid" id="" style="margin-top: 5px;margin-bottom: 5px;">
                <?php foreach($listcategory as $category) { 
                    if($category['id'] == $category_id){ ?>
                        <option value="<?php echo $category['id'] ?>" selected><?php echo $category['category_name'] ?></option>
                    <?php } else { ?>
                        <option value="<?php echo $category['id'] ?>" ><?php echo $category['category_name'] ?></option>
                    <?php }
                } ?>
                </select>
            </div>
            <div>
                <h2 style="color: #27ae60;"><?php if(isset($notification) && ($notification !="")) echo $notification?></p>
            </div>

        </div>

        <input type="submit" value="Cập nhật" class="btn" name="save">
    </form>
</section>