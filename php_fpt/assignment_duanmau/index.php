<?php
session_start(); 
include 'view/header.php';
include 'model/pdo.php';
include 'model/category.php';
include 'model/product.php';
include 'model/account.php';
include 'model/comment.php';

if(!isset($_SESSION['mycart'])) $_SESSION['mycart'] =[];



if(isset($_GET['page'])){
    $page = $_GET['page'];
    switch($page){
        case 'loginadmin':
            header("location:admin/index.php");
            break;
        case 'login':
            if(isset($_POST['login']) && $_POST['login']){
                $username= $_POST['username'];
                $password= $_POST['password'];
                $account = get_infor_user($username,$password);
                if(is_array($account)){
                  $_SESSION['user']=$account;
                  $listproduct = get_product_home();
                  $listtop10   = get_top10_view();
                  header('location:index.php?page=listproduct');
                  break;
                }else{
                  $notification = "Tài khoản hoặc mật khẩu không chính xác.Vui lòng kiểm tra lại!";
                }
            }
            include 'view/login.php';
            break;
        case 'logout':
            session_unset();
            header("location:index.php?page=login");
            break;
 
        case 'register':
            if(isset($_POST['save']) && ($_POST['save'])){
                $username = $_POST['username'];
                $password = $_POST['password'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $address = $_POST['address'];
                $role = $_POST['role'];
                echo $username;
                create_account($email,$username,$password,$address,$phonenumber,$role);
                $notification="Tạo tài khoản thành công.Đăng nhập để thực hiện các chức năng!";
            }
            include 'view/user/register.php';
            break;
        case 'forgotpassword':
            if(isset($_POST['forgot']) && ($_POST['forgot'])){
              $email = $_POST['email'];
              $account = get_infor_email($email);
            }
            include 'view/user/forgotpassword.php';
            break;    
        case 'productdetail':
            if(isset($_GET['id']) && ($_GET['id']) > 0){
                $product = get_product_by_id($_GET['id']);
                $listproductsamecategory = get_product_same_category($_GET['id']);
                $listcommnet = get_all_comment_by_id_product($_GET['id']);
            }
            include 'view/productdetail.php';
            break;   
        /* controller cart */
        case 'addtocart':
            if(isset($_POST['add']) && ($_POST['add'])){
                $id = $_POST['id'];
                $productname = $_POST['productname'];
                $image = $_POST['image'];
                $price = $_POST['price'];
                $quantity = 1;
                $total_amount = $price * $quantity;
                $product =[$id,$productname,$image,$price,$quantity,$total_amount];
                array_push($_SESSION['mycart'],$product);
            }
            include 'view/cart/viewcart.php';
            break; 
        case 'deletecart':
            if(isset($_GET['idcart']) && $_GET['idcard'] > 0){
                array_slice($_SESSION['mycart'],$_GET['idcart'],1);
            }else {
                $_SESSION['mycart'] =[];
            }
            // include 'view/cart/viewcart.php';
            header('location:index.php?page=addtocart');
        case 'searchproductbycategoryid':
            if(isset($_POST['search']) && ($_POST['search'])){
                $categoryid = $_POST['categoryid'];
            }else {
                $categoryid = 0;
            }
            $listproduct = get_product_by_categoryid($categoryid);
            $listtop10   = get_top10_view();
            $listcategory   = get_all_category();
            include 'view/home.php';
            break;  
               
        default:
            $listproduct = get_product_home();
            $listtop10   = get_top10_view();
            $listcategory   = get_all_category();
            include 'view/home.php';

    }
}else{

    $listproduct = get_product_home();
    $listtop10   = get_top10_view();
    $listcategory   = get_all_category();
    include 'view/home.php';

}

    
include 'view/footer.php';

?>