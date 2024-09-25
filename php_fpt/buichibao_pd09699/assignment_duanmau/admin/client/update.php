<section class="order" id="order" style="margin-top: 50px;">
    <h1 class="sub-heading">Cập nhật thông tin khách hàng</h1>
    <form action="index.php?page=saveupdateaccount" method="post" id="nameForm">
        <?php
           if(is_array($account)){
            extract($account);
           }
        ?>
        <div class="inputBox">
            <div class="input">
                <span>ID</span>
                <input type="text"  value="<?=$id?>"  disabled required>
                <input type="text"  name="id" value="<?=$id?>"  hidden required>
            </div>
            <div class="input">
                <span>Tên tài khoản</span>
                <input type="text" name="username" value="<?=$username?>"  required>
            </div>
            <div class="input">
                <span>Mật khẩu</span>
                <input type="text" name="password" value="<?=$password?>"  required>
            </div>
        </div>
        <div class="inputBox">
            <div class="input">
                <span>Email</span>
                <input type="email"   name="email" value="<?=$email?>"  required>
               
            </div>
            <div class="input"> 
                <span>Địa chỉ</span>
                <input type="text" name="address" value="<?=$address?>"  required>
            </div>
        </div>
        <div class="inputBox">  
        <div class="input">
                <span>Số điện thoại</span>
                <input type="text" name="phonenumber" value="<?=$phone_number?>"  required>
            </div>
             <div class="input">
                <span>Vai trò</span>
                <select name="role">
                   <?php 
                     if($role == 1){ ?>
                     
                     <option value="1">Admin</option>
                     <option value="0">User</option>
                     <?php } else { ?>
                     <option value="0">User</option>
                     <option value="1">Admin</option>

                   <?php }?>
                </select>
            </div>
        </div>

        <input type="submit" value="Cập nhật ngay" class="btn" name="save">
        <input type="reset" value="Nhập lại" class="btn">
      
</section>