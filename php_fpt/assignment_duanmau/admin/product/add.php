<section class="order" id="order">

    <h3 class="sub-heading">order now</h3>
    <h1 class="sub-heading">Tạo mới sản phẩm</h1>

    <form class="form-add-product">

        <div class="inputBox ">
            <div class="input input-box">
                <span>Tên sản phẩm</span>
                <input type="text"  name="productname" placeholder="Nhập tên sản phẩm" required>
               <p class="message"></p>
            </div>
            <div class="input input-box">
                <span>Giá</span>
                <input type="text"  name="price" placeholder="Nhập giá bán" required>
               <p class="message"></p>

            </div>
        </div>

        <div class="inputBox ">
            <div class="input input-box">
                <span>Hình ảnh</span>
                <input type="file"  name="image"  required>
               <p class="message"></p>

            </div>
            <div class="input input-box">
                <span>Mô tả</span>
                <input type="text"  name="description" placeholder="Nhập mô tả" required>
               <p class="message"></p>

            </div>
        </div>

        <div class="inputBox ">
            <div class="input input-box">
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