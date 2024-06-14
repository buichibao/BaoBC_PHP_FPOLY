<section class="order" id="order" style="margin-top: 100px;">
    <h1 class="sub-heading">Quên mật khẩu</h1>
    <form action="index.php?page=forgotpassword" method="post">
        <div>
            <a href="index.php?page=login" class="logo" id ="logo_login">BuiChiBao.</a>
        </div>
        <div class="inputBox">
            <div class="input">
                <span>Email</span>
                <input type="email" name="email" placeholder="Email or my phone">
            </div>
        </div>  
        <?php 
        if(is_array($account)) {
        extract($account);
        echo "Mật khẩu của bạn là : ".$password;
        } ?>
        <!-- Quên mật khẩu -->
      <div style="margin-top:50px ;">
        <input type="submit" value="Continue" class="btn" name="forgot">
      </div>
    </form>
  
</section>