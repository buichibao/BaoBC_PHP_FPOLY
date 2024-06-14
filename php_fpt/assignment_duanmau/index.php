<?php
session_start(); 
include 'view/header.php';
include 'model/pdo.php';
include 'model/category.php';
include 'model/product.php';
include 'model/account.php';
include 'model/comment.php';
include 'model/cart.php';
if(!isset($_SESSION['mycart'])) $_SESSION['mycart'] =[];


if(isset($_GET['page'])){
    $page = $_GET['page'];
    switch($page){
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
        /*controller đăng nhập đăng kí */
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
                update_view($_GET['id']);
            }
            include 'view/productdetail.php';
            break;   
        /* controller cart */
        case 'addtocart':
           if (isset($_POST['add']) && ($_POST['add'])) {
               $id = $_POST['id'];
               $existingProductIndex = findProductIndexById($id);
               if ($existingProductIndex == -1) {
                   $productname = $_POST['productname'];
                   $price = $_POST['price'];
                   $quantity = 1;
                   $total_amount= $price*$quantity;
                   $product = [$id, $productname, $price, $quantity, $total_amount];
                   $_SESSION['mycart'][] = $product;
               } else {
                   $_SESSION['mycart'][$existingProductIndex][3] += 1;
                   $_SESSION['mycart'][$existingProductIndex][4] = $_SESSION['mycart'][$existingProductIndex][3] * $_SESSION['mycart'][$existingProductIndex][2];
              } 
           }
            include 'view/cart/viewcart.php';
            break; 
        case 'updatequantity':
                if(isset($_POST['update']) && ($_POST['update'])){
                    for($i = 0 ; $i < count($_POST['productid']) ;$i++){
                        $quantity = $_POST['quantity'][$i];
                        $_SESSION['mycart'][$i][3] = $quantity;
                        $_SESSION['mycart'][$i][4] =   $_SESSION['mycart'][$i][3] * $_SESSION['mycart'][$i][2];
                    }
                }
                include 'view/cart/viewcart.php';
                break;
        case 'deletecart':
            if(isset($_GET['idcart'])){
                header('location:index.php?page=productdetail');
                array_slice($_SESSION['mycart'],$_GET['idcart'],1);
            }else{
                $_SESSION['mycart'] = [];
            }
            header('location:index.php?page=addtocart');
            break;
        case 'bill':
            include 'view/cart/bill.php';
            break;
        case 'billcomfirm':
            if(isset($_POST['oder']) && ($_POST['oder'])){
                $username = $_POST['username'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $phonenumber = $_POST['phone_number'];
                $bill_pttt =$_POST['pay'];
                $dateoder =date('h:i:sa d/m/Y');
                $totalamount = total_amount();
                $userid = $_SESSION['user']['id'];
                $bill_id = insert_bill($username,$email,$address,$phonenumber,$bill_pttt,$dateoder,$totalamount,$userid);
                foreach ($_SESSION['mycart'] as $product) {
                    insert_cart($_SESSION['user']['id'],$product[0],$product[1],$product[2],$product[3],$bill_id);
                }
                $_SESSION['mycart'] = [];
            }
            $bill = get_bill_by_id($bill_id);
            $listbill = get_bill_in_cart_by_id($bill_id);
            include 'view/cart/billcomfirm.php';
            break;
        case 'mybill':
            if(isset($_SESSION['user'])){
                $id = $_SESSION['user']['id']; 
                $danhsachhoadon = loadall_bill($id);
            }
            include 'view/cart/mybill.php';
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