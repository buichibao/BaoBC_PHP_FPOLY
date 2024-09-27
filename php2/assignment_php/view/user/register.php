<section class="order" id="order" style="margin-top: 50px;">
    <h1 class="sub-heading">Đăng kí người dùng</h1>
    <form action="index.php?page=register" method="post" >
        <div class="inputBox">
            <div class="input">
                <span>Tên tài khoản</span>
                <input type="text" name="username"   required>
            </div>
            <div class="input">
                <span>Mật khẩu</span>
                <input type="text" name="password"   required>
            </div>
        </div>
        <div class="inputBox">
            <div class="input">
                <span>Email</span>
                <input type="email"  name="email"   required>
               
            </div>
            <div class="input"> 
                <span>Địa chỉ</span>
                <input type="text" name="address"   required>
            </div>
        </div>
        <div class="inputBox">  
        <div class="input">
                <span>Số điện thoại</span>
                <input type="text" name="phonenumber"   required>
                <input type="number" name="role" value ="0"   hidden>
            </div>
        </div>
        <p style="color:#27ae60"><?php if(isset($notification)&& $notification!="") echo $notification ?></p>

        <input type="submit" value="Đăng kí ngay" class="btn" name="save">
        <input type="reset" value="Nhập lại" class="btn">
    </form>
      
</section>