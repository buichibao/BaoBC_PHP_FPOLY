<div class="row">
            <div class="row formtitle">
                <h1>CẬP NHẬT TÀI KHOẢN KHÁCH HÀNG</h1>
            </div>
            <div class="row formcontent">
                <form action="index.php?page=savekhachhang" method="post">
                    <?php 
                     
                    ?>
                    <div class="row mb10">
                         Mã khách hàng <br>
                        <input type="text" name="id" value="<?=$id?>" disabled>
                    </div>
                    <div class="row mb10">
                         Tên đăng nhập <br>
                        <input type="text" name="username" id=""  value="<?php echo $khachhang['username'] ?>">
                    </div>
                    <div class="row mb10">
                        Mật khẩu <br>
                        <input type="text" name="password" id=""  value="<?php echo $khachhang['password'] ?>">
                    </div>
                    <div class="row mb10">
                        Email <br>
                        <input type="text" name="email" id=""  value="<?php echo $khachhang['email'] ?>">
                    </div>
                    <div class="row mb10">
                        Số điện thoại <br>
                        <input type="text" name="phonenumber" id=""  value="<?php echo $khachhang['phone_number'] ?>">
                    </div>
                    <div class="row mb10">
                        Địa chỉ <br>
                        <input type="text" name="address" id=""  value="<?php echo $khachhang['address'] ?>">
                        <input type="text" name="id" id="" value="<?=$id?>" hidden>
                    </div>
                    <div class="row mb10">
                        Vai trò <br>
                        <select name="role">
                            <?php if($role==1) { ?>
                            <option value=1>Admin</option>
                            <option value=0>User</option>
                            <?php } else { ?>
                            <option value=0>User</option>
                            <option value=1>Admin</option>
                            <?php } ?>
                        </select>
                      
                    </div>
                    <div class="row">
                        <input type="submit" value="LƯU THAY ĐỔI" name="update">
                        <input type="reset" value="NHẬP LẠI">
                        <a href="index.php?page=listkhachhang"><input type="button" value="DANH SÁCH" name="list"></a>
                    </div>
                </form>
                <p><?php if(isset($thongbao) && ($thongbao!="")) echo "$thongbao" ?></p>
            </div>
         </div>
</div>