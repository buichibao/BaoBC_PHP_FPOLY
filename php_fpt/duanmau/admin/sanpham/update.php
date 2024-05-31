

<div class="row">
            <div class="row formtitle">
                <h1>CẬP NHẬT SẢN PHẨM</h1>
            </div>
            <div class="row formcontent">
                <form action="index.php?page=updatesanpham" method="post" enctype="multipart/form-data">
                    <div class="row mb10">
                         Mã sản phẩm <br>
                        <input type="text"  value="<?php echo $sanpham['id'] ?>"  disabled>
                        <input type="text" name="id" value="<?php echo $sanpham['id'] ?>"  hidden>
                    </div>
                    <div class="row mb10">
                        Tên sản phảm <br>
                        <input type="text" name="productname" value="<?php echo $sanpham['product_name'] ?>">
                    </div>
                    <div class="row mb10">
                        Giá sản phẩm <br>
                        <input type="text" name="price" value="<?php echo $sanpham['price'] ?>">
                    </div>  
                    <div class="row mb10">
                        Hình ảnh sản phẩm <br>
                        
                        <?php
                          $imagepath = "../upload/".$sanpham['image'];
                           if(is_file($imagepath)){ ?>
                            <img src="<?php echo $imagepath?>" alt="" width="80">
                            <?php }else{ echo "no photo"  ?>
                        <?php }?>
                        <br><input type="file" name="image"><br>
                    </div> 
                     <div class="row mb10">
                        Mô tả <br>
                        <input type="text" name="description" value="<?php echo $sanpham['description'] ?>" >
                    </div>
                    <div class="row mb10">
                        Danh mục <br>
                        <select name="categoryid" id="">
                          <?php foreach($listdanhmuc as $danhmuc) { 
                            if($danhmuc['id'] ==$sanpham['category_id']){ ?>
                              <option value="<?php echo $danhmuc['id'] ?>" selected><?php echo $danhmuc['category_name'] ?></option>
                           <?php } else { ?>
                               <option value="<?php echo $danhmuc['id'] ?>" ><?php echo $danhmuc['category_name'] ?></option>
                          <?php }
                            } ?>
                        </select>
                    </div>
                    <div class="row">
                        <input type="submit" value="LƯU THAY ĐỔI" name="update">
                        <input type="reset" value="NHẬP LẠI">
                        <a href="index.php?page=listsanpham"><input type="button" value="DANH SÁCH" name="list"></a>
                    </div>
                </form>
            </div>
         </div>
</div>