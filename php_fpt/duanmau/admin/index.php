<?php
include 'header.php';
include '../model/danhmuc.php';
include '../model/sanpham.php';
include '../model/pdo.php';

if(isset($_GET['page'])){
    $page = $_GET['page'];
    switch($page){

        /* controller danh mục */
        case 'adddanhmuc':
            if(isset($_POST['add'])&&($_POST['add'])){
            $categoryname = $_POST['categoryname'];
            insert_danhmuc($categoryname);
            $success = "Thêm mới thành công"; 
            }
            include 'danhmuc/add.php';
            break;

        case 'listdanhmuc':
            $listdanhmuc = select_danhmuc();
            include 'danhmuc/list.php';
            break;  
                

        case 'deletedanhmuc':
            if(isset($_GET['id']) && ($_GET['id'] > 0)){
            delete_danhmuc($_GET['id']);
            }
            $listdanhmuc = select_danhmuc();
            include 'danhmuc/list.php';
            break;  

        case 'suadanhmuc':
            if(isset($_GET['id']) && ($_GET['id'] > 0)){
            $danhmuc = select_danhmuc_by_id($_GET['id']);
            }
            include 'danhmuc/update.php';
            break; 

        case 'updatedanhmuc':
            if(isset($_POST['update']) && ($_POST['update'])){
            update_danhmuc($_POST['id'],$_POST['categoryname']);
            }
            $listdanhmuc = select_danhmuc();
            $success = "Cập nhật thành công"; 
            include 'danhmuc/list.php';
            break; 

        /* controller sản phẩm */

        case 'addsanpham':
            if(isset($_POST['add'])&&($_POST['add'])){
            $productname = $_POST['productname'];
            $price = $_POST['price']; 
            $description = $_POST['description']; 
            $categoryid = $_POST['categoryid'];
            $image = $_FILES['image']['name'];
            $target_dir = "../upload/";
            $target_file = $target_dir . basename($_FILES["image"]["name"]);
            if(move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)){
               echo "Upload file thành công";
            }else {
                echo "Upload file thất bại";
            }
            insert_sanpham($productname,$price,$image,$description,$categoryid);
            $success = "Thêm mới thành công"; 
            }
            $listdanhmuc = select_danhmuc();
            include 'sanpham/add.php';
            break;

        case 'listsanpham':
            if(isset($_POST['search']) && ($_POST['search'])){
                $categoryid = $_POST['categoryid'];
            }else {
                $categoryid = 0;
            }
            $listdanhmuc = select_danhmuc();
            $listsanpham = select_sanpham($categoryid);
            include 'sanpham/list.php';
            break;  
                

        case 'deletesanpham':
            if(isset($_GET['id']) && ($_GET['id'] > 0)){
            delete_sanpham($_GET['id']);
            }
            $listsanpham = select_sanpham(0);
            include 'sanpham/list.php';
            break;  

        case 'suasanpham':
            if(isset($_GET['id']) && ($_GET['id'] > 0)){
            $sanpham = select_sanpham_by_id($_GET['id']);
            }
            $listdanhmuc = select_danhmuc();
            include 'sanpham/update.php';
            break; 

        case 'updatesanpham':
            if(isset($_POST['update']) && ($_POST['update'])){
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
            update_sanpham($id,$productname,$price,$image,$description,$categoryid);
            }
           
            $listsanpham = select_sanpham(0);
            $listdanhmuc = select_danhmuc();
            $success = "Cập nhật thành công"; 
            include 'sanpham/list.php';
            break; 
        default:
            include 'home.php';    
    }
}else {
    include 'home.php';
}

include 'footer.php';
?>