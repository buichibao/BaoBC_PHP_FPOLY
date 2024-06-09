<div class="row mb">
    <div class="boxtrai mr">
        <div class="row mb">
        <div class="boxtitle">Quên mật khẩu</div>
        <div class="row boxcontent formtaikhoan">
            <form action="" method="post">
                <div class="row mb10"> Email <input type="email" name="email"> </div>
                <div class="row mb10">
                    <input type="submit" name="gui" value="Gửi">
                    <input type="reset"  value="Nhập lại">
                </div>
                <div class="row mb10"><?php if(isset($thongbao) && ($thongbao!="")) echo "$thongbao"  ?></div>
            </form>
        </div>
        </div>
    </div>  
    <div class="boxphai">
        <?php include '../view/boxright.php'  ?>
    </div>
</div>