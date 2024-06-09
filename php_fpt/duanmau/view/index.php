<?php
session_start();
include "../model/pdo.php";
include "../model/danhmuc.php";
include "../model/sanpham.php";
include "../model/taikhoan.php";
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
        case 'dangki':
            if(isset($_POST['dangki'])){
                create_account($_POST['email'],$_POST['username'],$_POST['password']);
                $success ="Tạo thành công tài khoản";
            }
            include "../view/user/dangki.php";
            break;
        case 'dangnhap':
            if(isset($_POST['dangnhap'])){
                $username = $_POST['username'];
                $password = $_POST['password'];
                $check_user = get_infor_user($username,$password);
                if(is_array($check_user)){
                    $_SESSION['user'] = $check_user;
                    $thongbao = "Đăng nhập thành công";
                    header('location:index.php');
                }else {
                    $thongbao = "Vui lòng kiểm tra lại thông tin của bạn";
                }
            }
            include "../view/home.php";
            break;
        case 'capnhattaikhoan':
            if(isset($_POST['capnhat'])&& $_POST['capnhat']){
                $id = $_POST['id'];
                $username = $_POST['username'];
                $password = $_POST['password'];
                $email = $_POST['email'];
                $phonenumber = $_POST['phonenumber'];
                $address = $_POST['address'];
                $role = "";
                update_account($id,$username,$password,$email,$phonenumber,$address,$role);
                $_SESSION['user'] = get_infor_user($username,$password);
                $thongbao = "Cập nhật thành công";
            }
            include "../view/user/capnhattaikhoan.php";
            break;       
        case 'quenmatkhau':
            if(isset($_POST['gui'])&& $_POST['gui']){
                $email = $_POST['email'];
                $checkemail = get_infor_email($email);
                if(is_array($checkemail)){
                    extract($checkemail);
                    $thongbao ="Mật khẩu của bạn là :".$password;
                }else{
                    $thongbao ="Email không tồn tại";
                }
            }
            include "../view/user/quenmatkhau.php";
            break; 

        case 'dangxuat':
            session_unset();
            header("location:index.php");
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
        case 'sanpham':
            if(isset($_GET['iddm']) && ($_GET['iddm'])){
                $listsanphamiddm = select_sanpham($_GET['iddm']);
                $tendanhmuc = get_categoryname($_GET['iddm']);
            }
            include "../view/sanphamtheodanhmuc.php";
            break;    
        case 'sanphamchitiet':
            if(isset($_GET['idsp']) && ($_GET['idsp']) > 0){
               $sanpham = select_sanpham_by_id($_GET['idsp']);
               $listsanphamcungloai = select_san_pham_cung_loai($_GET['idsp']);
               include "../view/sanphamchitiet.php";
            }else {
                include "../view/home.php"; 
            }
            break;    
        default :
           include "../view/home.php"; 
    }
}else {
    include "../view/home.php"; 
}

include "../view/footer.php";

?>