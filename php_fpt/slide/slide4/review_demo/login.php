<?php

if(isset($_GET["path"])){
    if($_GET["path"] == "google"){
        echo "Đây là Google";
    }elseif($_GET["path"] == "facebook"){
        echo "Đây là Facebook";
    }else{
        echo "Không có trang web nào";
    }
}else {
    if(isset($_POST["username"]) && isset($_POST["pass"])){
    if($_POST["username"] == "baobc"){
        if($_POST["pass"] == "111"){
            echo "Đăng nhập thành công";
        }else{
            echo "Sai mật khẩu";
        }
    }else{
        echo "Sai tài khoản";
    }
    
 }

}

?>