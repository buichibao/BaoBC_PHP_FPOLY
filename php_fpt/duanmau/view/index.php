<?php
include "../model/pdo.php";
include "../model/danhmuc.php";
include "../model/sanpham.php";
include "../view/header.php";

$sanphammoi  = select_sanpham_home();
$listdanhmuc = select_danhmuc();
$listtop10   = select_sanpham_top10();

if(isset($_GET['page'])){
    $page = $_GET['page'];
    switch($page){
        case 'gioithieu':
            include "../view/gioithieu.php";
            break;
        case 'gopy':
            include "../view/gopy.php";
            break;
        case 'hoidap':
            include "../view/hoidap.php";
            break;
        case 'lienhe':
            include "../view/lienhe.php";
            break;
        default :
           include "../view/home.php"; 
    }
}else {
    include "../view/home.php"; 
}

include "../view/footer.php";

?>