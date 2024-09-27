<section class="order" id="order">
    <h3 class="sub-heading">order now</h3>
    <h1 class="sub-heading">Tạo danh mục mới</h1>
    <form action="index.php?page=addcategory" method="post">
        <div class="inputBox">
            <div class="input">
                <span>Mã danh mục</span>
                <input type="text" name="id" placeholder="Mã danh mục sẽ tự động được thêm" disabled>
            </div>
            <div class="input">
                <span>Tên danh mục</span>
                <input type="text" name="categoryname" placeholder="Nhập tên danh mục" required>
            </div>
        </div>
        <input type="submit" value="Tạo mới" class="btn" name="add">
        <h2 style="color: #27ae60;"><?php if(isset($notification) && ($notification !="")) echo $notification?></p>
    </form>
</section>