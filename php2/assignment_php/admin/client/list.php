
<div class="cart convertContent">
    <article>
        <div class="grid">
            <div class="product_container">
                <div class="title">
                    <div class="item">ID</div>
                    <div class="item">Tên tài khoản</div>
                    <div class="item">Mật khẩu</div>
                    <div class="item">Email</div>
                    <div class="item">Số điện thoại</div>
                    <div class="item">Vai trò</div>
                    <div class="item">Chỉnh sửa</div>
                    <div class="item">Xoá</div>
                </div>
                <?php 
                   foreach ($listaccount as $account) {
                    extract($account)
                ?>
                <div class="title-list">
                    <div class="item"><?=$id?></div>
                    <div class="item"><?=$username?></div>
                    <div class="item"><?=$password?></div>
                    <div class="item"><?=$email?></div>
                    <div class="item"><?=$phone_number?></div>
                    <div class="item"><?php echo ($role==1)?"Admin":"User";?></div>
                    <div class="item"><a href="index.php?page=updateaccount&id=<?=$id?>"><i class='bx bx-pencil'></i></a></div>
                    <div class="item"><a href="index.php?page=deleteaccount&id=<?=$id?>"><i class='bx bx-trash'></i></a></div>
                </div>
                   
                <?php } ?>
        </div>
    </article>
</div>