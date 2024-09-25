<?php
session_start();
include 'header.php';
include '../model/category.php';
include '../model/product.php';
include '../model/account.php';
include '../model/comment.php';
include '../model/cart.php';
include '../model/pdo.php';

if(isset($_GET['page'])){
    $page = $_GET['page'];
    switch($page){
        /* controller product */
        case "listproduct":
            $listproduct = get_product_by_categoryid($categoryid);
            $listcategory   = get_all_category();
            include '../admin/product/list.php';
            break;
        case "addproduct":
            if(isset($_POST['add']) && $_POST['add']){
                $productname = $_POST['productname'];
                $price = $_POST['price'];
                $description = $_POST['description'];
                $categoryid = $_POST['categoryid'];
                $image = $_FILES['image']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["image"]["name"]);
                if(move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)){
                  // echo "Thành công";
                }else {
                  // echo "Thất bại";  
                } 
                save_add_product($productname,$price,$image,$description,$categoryid);
                $notification = "Thêm thành công";
            } 
            $listcategory = get_all_category();
            include "../admin/product/add.php";
            break;
        case "deleteproduct":
            if(isset($_GET['id']) && ($_GET['id']) > 0){
            delete_product($_GET['id']);
            $listproduct = get_product_home();
            }
            include "../admin/product/list.php";
            break;    
        case "updateproduct":
            if(isset($_GET['id']) && ($_GET['id']) > 0){
            $product = get_product_by_id($_GET['id']);
            $listcategory = get_all_category();
            }
            include "../admin/product/update.php";
            break;

        case "saveupdateproduct":
            if(isset($_POST['save']) && ($_POST['save'])){
            $id = $_POST['id'];
            $productname = $_POST['productname'];
            $price = $_POST['price']; 
            $description = $_POST['description']; 
            $categoryid = $_POST['categoryid'];
            $image = $_FILES['image']['name'];
            $target_dir = "../upload/";
            $target_file = $target_dir . basename($_FILES["image"]["name"]);
            if(move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)){
              
            }else {
                
            } 
            update_product($id,$productname,$price,$image,$description,$categoryid);
            }
            $listproduct = get_product_home();
            include 'product/list.php';
            break;
        case 'searchproductbycategoryid':
            if(isset($_POST['search']) && ($_POST['search'])){
                $categoryid = $_POST['categoryid'];
            }else {
                $categoryid = 0;
            }
            $listproduct = get_product_by_categoryid($categoryid);
            $listcategory   = get_all_category();
            include 'product/list.php';
            break;     
        /* controller category */
        case "listcategory":
            $listcategory = get_all_category();
            include '../admin/category/list.php';
            break;
        case "addcategory":
            if(isset($_POST['add']) && $_POST['add']) {
               $categoryname = $_POST['categoryname'];
               add_category($categoryname);
               $notification ="Thêm danh mục danh công";
            }
            include '../admin/category/add.php';
            break;
        case "updatecategory":
            if(isset($_GET['id']) && ($_GET['id']>0)){
                $category = get_category_by_id($_GET['id']);
            }
            include '../admin/category/update.php';
            break;
        case "saveupdatecategory":
            if(isset($_POST['save']) && ($_POST['save'])){
                $id = $_POST['id'];
                $categoryname = $_POST['categoryname'];
                update_category($id,$categoryname);
                $notification ="Cập nhật thành công";
            }
            $listcategory = get_all_category();
            include '../admin/category/list.php';
            break;
        case "deletecategory":
            if(isset($_GET['id']) && ($_GET['id']>0)){
                $category = delete_category($_GET['id']);
            }
            $listcategory = get_all_category();
            include '../admin/category/list.php';
            break;               
        /* controller account */
        case 'logoutadmin':
            session_unset();
            header("location:http://localhost/php_fpt/BaoBC_PHP_FPOLY/php_fpt/assignment_duanmau/index.php?page=login");
            break;
        case "listaccount":
            $listaccount = gel_all_account();
            include '../admin/client/list.php';
            break;
        case "updateaccount":
            if(isset($_GET['id']) && ($_GET['id'])){
            $account = get_account_by_id($_GET['id']);
            }   
            include '../admin/client/update.php';
            break;
        case "saveupdateaccount":
            if(isset($_POST['save']) && $_POST['save']){
                $id = $_POST['id'];
                $username = $_POST['username'];
                $password = $_POST['password'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $phonenumber = $_POST['phonenumber'];
                $role = $_POST['role'];
                update_account($id,$username,$password,$email,$phonenumber,$address,$role);
            }
            $listaccount = gel_all_account();
            include '../admin/client/list.php'; 
            break;  
        /* controller comments*/
        case 'listcomment':
            $listcomment = get_all_comment();
            include '../admin/comment/list.php';
            break; 
            
        case 'deletecomment':
             if(isset($_GET['id']) && $_GET['id'] > 0){
                delete_comment_by_id($_GET['id']);
             } 
             $listcomment = get_all_comment();
            include '../admin/comment/list.php';
            break;
        case 'searchcommentbyproductname';
              if(isset($_POST['search']) && $_POST['search']){
                $productname = $_POST['productname'];
                $listcomment = search_comment_by_productname($productname);
              }
              include '../admin/comment/list.php';
              break;
        /*controller statistical*/
        case 'statistical':
            $result = statistical_results();
            include '../admin/statistical/statistical.php';
            break; 
        /*controller bill */
        case 'listbill':
            if(isset($_POST['ib_bill']) && $_POST['ib_bill']){
                $id_search = $_POST['ib_bill'];
                $listbill = get_all_bill($id_search);
            }else {
                $listbill = get_all_bill("");
            }
      
        include '../admin/bill/list.php';
        break;
        case 'deletebill':
            if(isset($_GET['id'])&& $_GET['id']>0){
                $id = $_GET['id'];
                delete_cart($id);
                delete_bill($id);

            }
            $listbill = get_all_bill("");
            include '../admin/bill/list.php';
            break;
        case 'updatebill':
            if(isset($_GET['id'])&& $_GET['id']>0){
                $id = $_GET['id'];
                $bill = get_bill_by_id($id);
            }
            include '../admin/bill/update.php';
            break;
        case 'saveupdatebill':
            if(isset($_POST['save']) && $_POST['save']){
                $id = $_POST['id'];
                $status = $_POST['status'];
                update_bill($id,$status);
                $notification = "Cập nhật thành công";
            }
            $listbill = get_all_bill("");
            include '../admin/bill/list.php';
            break;

        default:
            include 'home.php';    
    }
}else {
    include 'home.php';    
}

include 'footer.php';

?>