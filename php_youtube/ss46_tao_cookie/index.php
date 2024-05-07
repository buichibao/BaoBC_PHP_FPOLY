<?php

$cookieName = "user";
$cookieValue = "Bui Chi Bao";  //sửa giá trị cookie chỉ cần sửa ở đây   


 setcookie($cookieName,$cookieValue,time()+300000,"/"); //tạo cooke thời gian sống 30 s ((để xoá cookie đổi thành time()- chính thời gian mình tạo))

if(isset($_COOKIE[$cookieName])){
  echo "Cookie $cookieName đã tồn tại";
}else{
    echo "Cookie $cookieName không tồn tại";
    
}


?>