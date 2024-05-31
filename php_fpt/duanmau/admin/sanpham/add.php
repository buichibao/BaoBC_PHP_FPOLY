<div class="row">
            <div class="row formtitle">
                <h1>THÊM MỚI SẢN PHẨM</h1>
            </div>
            <div class="row formcontent">
                <form action="index.php?page=addsanpham" method="post" enctype="multipart/form-data">
                    <div class="row mb10">
                         Mã sản phẩm <br>
                        <input type="text" name="id"  disabled>
                    </div>
                    <div class="row mb10">
                        Tên sản phảm <br>
                        <input type="text" name="productname" >
                    </div>
                    <div class="row mb10">
                        Giá sản phẩm <br>
                        <input type="text" name="price" >
                    </div>  
                    <div class="row mb10">
                        Hình ảnh sản phẩm <br>
                        <input type="file" name="image" >
                    </div> 
                     <div class="row mb10">
                        Mô tả <br>
                        <input type="text" name="description" >
                    </div>
                    <div class="row mb10">
                        Danh mục<br>
                        <select name="categoryid" id="">
                        <?php foreach ($listdanhmuc as $danhmuc) { ?>
                          <option value="<?php echo $danhmuc['id'] ?>"><?php echo $danhmuc['category_name'] ?></option>
                        <?php } ?>
                         </select>
                    </div>
                    <div class="row">
                        <input type="submit" value="THÊM MỚI" name="add">
                        <input type="reset" value="NHẬP LẠI">
                        <a href="index.php?page=listsanpham"><input type="button" value="DANH SÁCH" name="list"></a>
                    </div>
                </form>
                <p><?php if(isset($success) && ($success!="")) echo "$success" ?></p>
            </div>
         </div>
</div>