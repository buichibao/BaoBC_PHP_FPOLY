

<div class="cart convertContent">
    <div>
     <form action="index.php?page=searchcommentbyproductname" method="post" style="margin: 0px 0px 10px 10px;">
        <input type="text" style="border-radius:0;padding: 5px 45px;background-color:white; border: 2px solid #27ae60;color:#192a56;" class="btn" name="productname" placeholder="Nhập tên sản phẩm">
        <input type="submit" name="search" class="btn" value="Tìm kiếm" style="background-color: #27ae60;border-radius:0">    
    </form>   
    </div>
    
    <article>
        <div class="grid">
            <div class="product_container">
                <div class="title">
                    <div class="item">Mã</div>
                     <div class="item"></div>
                    <div class="item">Tên tài khoản</div>
                    <div class="item">Sản phẩm</div>
                    <div class="item">Nội dung bình luận</div>
                    <div class="item"></div>
                    <div class="item">Ngày bình luận</div>
                    <div class="item">Xoá</div>
                </div>
                <?php 
                if(is_array($listcomment)){
                   foreach ($listcomment as $comment) {
                    extract($comment)
                ?>
                <div class="title-list">
                    <div class="item"><?=$id_c?></div>
                    <div class="item"></div>
                    <div class="item"><?=$username?></div>
                    <div class="item"><?=$product_name?></div>
                    <div class="item"><?=$comment_content?></div>
                    <div class="item"></div>
                    <div class="item"><?=$commentdate?></div>
                    <div class="item"><a href="index.php?page=deletecomment&id=<?=$id_c?>"><i class='bx bx-trash'></i></a></div>
                </div>
                   
                <?php }
                } ?>
        </div>
    </article>
</div>