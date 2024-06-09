<div class="row mb">
    <div class="boxtrai mr">
        <div class="row mb">
        <div class="boxtitle">Đăng kí thành viên</div>
        <div class="row boxcontent formtaikhoan">
            <form action="" method="post">
                <div class="row mb10"> Email <input type="email" name="email"> </div>
                <div class="row mb10"> User name<input type="text" name="username"></div>
                <div class="row mb10"> Pass word<input type="password" name="password"></div>
                <div class="row mb10">
                    <input type="submit" name="dangki" value="Đăng kí">
                    <input type="reset"  value="Nhập lại">
                </div>
                <div class="row mb10"><?php if(isset($success) && ($success!="")) echo "$success"  ?></div>
            </form>
        </div>
        </div>
    </div>  
    <div class="boxphai">
        <?php include '../view/boxright.php'  ?>
    </div>
</div>