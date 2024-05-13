<?php

if(isset($_POST['btn'])){
    if(isset($_POST['user']) && isset($_POST['password'])){
        $user = $_POST['user'];
        $password = $_POST['password'];
        if(!filter_var($user,FILTER_VALIDATE_EMAIL)){
            echo "tên đăng nhập không đúng định dạng";
        }else {
            if($user ==="baobc2202@gmail.com" && $password === "1"){
                echo "Chào $user";
            }else {
                echo "Tài khoản mật khẩu không chính xác";
            }
        }
    }
}


?>