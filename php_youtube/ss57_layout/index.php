<ul>
    <li><a href="index.php?page_layout=trangchu">Trang chủ</a></li>
    <li><a href="index.php?page_layout=sanpham">Sản phẩm</a></li>
    <li><a href="index.php?page_layout=lienhe">Liên hệ</a></li>
    <li><a href="index.php?page_layout=giohang">Giỏ hàng</a></li>
</ul>


<?php

if(isset($_GET['page_layout'])){
    switch ($_GET['page_layout']) {
        case 'trangchu':
        include("trangchu.php");
        break;

        case 'sanpham':
        include("sanpham.php");   
        break;

        case 'lienhe':
        include("lienhe.php");      
        break;

        case 'giohang':
        include("giohang.php");     
        break;
        
        default:
            
        break;
    }
}


?>