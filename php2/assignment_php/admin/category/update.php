<section class="order" id="order" style="margin: 150px auto;">

    <h1 class="sub-heading">Cập nhật thông tin danh mục</h1>
    <form action="index.php?page=saveupdatecategory" method="post">
        <?php 
        if(is_array($category)){
            extract($category);
        }
        ?>
        <div class="inputBox">
            <div class="input">
                <span>Mã danh mục</span>
                <input type="text" name="id" placeholder="Mã danh mục không được phép cập nhật" value="<?=$id?>" disabled>
                <input type="text" name="id" value="<?=$id?>" hidden>
            </div>
            <div class="input">
                <span>Tên danh mục</span>
                <input type="text" name="categoryname" placeholder="Nhập tên danh mục" value="<?=$category_name?>" required>
            </div>
        </div>
        <input type="submit" value="Cập nhật" class="btn" name="save">
        <h2 style="color: #27ae60;"><?php if(isset($notification) && ($notification !="")) echo $notification?></p>
    </form>
</section>