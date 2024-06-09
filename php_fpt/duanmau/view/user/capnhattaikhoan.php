<div class="row mb">
    <div class="boxtrai mr">
        <div class="row mb">
        <div class="boxtitle">Cập nhật tài khoản</div>
        <div class="row boxcontent formtaikhoan">
            <?php if(isset($_SESSION['user'])&&(is_array($_SESSION['user']))){
                  extract($_SESSION['user']);
                }
             ?>
            <form action="index.php?page=capnhattaikhoan" method="post">
                <div class="row mb10"> <input type="number" name="id" value="<?php echo $id ?>" hidden> </div>
                <div class="row mb10"> Email <input type="email" name="email" value="<?=$email?>"> </div>
                <div class="row mb10"> User name<input type="text" name="username" value="<?=$username?>"></div>
                <div class="row mb10"> Pass word<input type="password" name="password" value="<?=$password ?>"></div>
                <div class="row mb10"> Phone number<input type="text" name="phonenumber" value="<?= $phone_number ?>"></div>
                <div class="row mb10"> Addres<input type="text" name="address" value="<?=$address ?>"></div>
                <div class="row mb10">
                    <input type="submit" name="capnhat" value="Lưu thay đổi">
                    <input type="reset"  value="Nhập lại">
                </div>
                <div class="row mb10"><?php if(isset($thongbao) && ($thongbao!="")) echo "$thongbao";
                ?></div>
            </form>
        </div>
        </div>
    </div>  
    <div class="boxphai">
        <?php include '../view/boxright.php'  ?>
    </div>
</div>