
<div class="cart convertContent">
    <article>
        <div class="grid">
        <a href="index.php?page=addcategory" class="btn" id="addproduct" style="margin-left: 1px;">Thêm mới <i class="fas fa-add"></i></a>
            <div class="product_container">
                <div class="title">
                    <div class="item"></div>
                    <div class="item"></div>
                    <div class="item">ID</div>
                    <div class="item">Tên danh mục</div>
                    <div class="item"></div>
                    <div class="item">Chỉnh sửa</div>
                    <div class="item">Xoá</div>
                </div>
                <?php 
                   foreach ($listcategory as $category) {
                ?>
                <div class="title-list">
                    <div class="item"></div>
                    <div class="item"><input type="checkbox"></div>
                    <div class="item"><?php echo $category['id'] ?></div>
                    <div class="item"><?php echo $category['category_name'] ?></div>
                    <div class="item"></div>
                    <div class="item"><a href="index.php?page=updatecategory&id=<?php echo $category['id'] ?>"><i class='bx bx-pencil'></i></a></div>
                    <div class="item"><a href="index.php?page=deletecategory&id=<?php echo $category['id'] ?>"><i class='bx bx-trash'></i></a></div>
                  
                    
                </div>
                   
                <?php } ?>
        </div>
    </article>
</div>