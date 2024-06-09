<section class="order" id="order" style="margin-top: 70px;">

   
    <h1 class="sub-heading">Đăng nhập</h1>

    <form action="index.php?page=login" method="post">
        <div>
            <a href="#" class="logo" id ="logo_login">BuiChiBao.</a>
        </div>
        <div class="inputBox">
            <div class="input">
                <span>Tài khoản</span>
                <input type="text" name="username" placeholder="Nhập tên tài khoản">
            </div>
            <div class="input">
                <span>Mật khẩu</span>
                <input type="password"  name="password" placeholder="Nhập mật khẩu">
            </div>
            <p style="color:red"><?php if(isset($notification)&& $notification!="") echo $notification ?></p>
        </div>
        <!-- Quên mật khẩu -->
        <p style="text-align: right;font-size:12px"><a href="index.php?page=forgotpassword">Quên mật khẩu ?</a></p>
   
      <div style="margin-left:80px ;margin-top:50px ;">
        <input type="submit" value="Đăng nhập" class="btn" name="login">
        <a href="index.php?page=register"><input type="button" value="Đăng kí" class="btn" name="register" style="background-color:#27ae60"></a>
      </div>
        
    </form>
</section>
