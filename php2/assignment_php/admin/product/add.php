<section class="order" id="order">

    <h3 class="sub-heading">order now</h3>
    <h1 class="sub-heading">Tạo mới sản phẩm</h1>

    <form action="index.php?page=addproduct" method="post"   enctype="multipart/form-data">

        <div class="inputBox">
            <div class="input">
                <span>Tên sản phẩm</span>
                <input type="text"  name="productname" placeholder="Nhập tên sản phẩm" required>
               
            </div>
            <div class="input">
                <span>Giá</span>
                <input type="text"  name="price" placeholder="Nhập giá bán" required>
            </div>
        </div>

        <div class="inputBox">
            <div class="input">
                <span>Hình ảnh</span>
                <input type="file"  name="image"  required>
            </div>
            <div class="input">
                <span>Mô tả</span>
                <input type="text"  name="description" placeholder="Nhập mô tả" required>
            </div>
        </div>

        <div class="inputBox">
            <div class="input">
                <span>Danh mục</span>
                <select name="categoryid" id="" style="margin-top: 5px;margin-bottom: 5px;">
                   <?php
                      foreach ($listcategory as $category) {
                        extract($category); ?>
                        <option value="<?=$id?>"><?=$category_name?></option>
                    <?php  } ?>
                </select>
            </div>
            <div>
                <h2 style="color: #27ae60;"><?php if(isset($notification) && ($notification !="")) echo $notification?></p>
            </div>

        </div>

      
        

        <input type="submit" value="Thêm mới" class="btn" name="add">
        <input type="reset" value="Nhập lại" class="btn"    >
    </form>
</section>