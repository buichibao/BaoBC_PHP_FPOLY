<?php

include 'connect.php';

if(isset($_GET['this_id'])){
    $id = $_GET['this_id'];
    
    $sql = "SELECT * FROM iphone WHERE id =$id";
    $result = mysqli_query($connect ,$sql);

    $product = mysqli_fetch_assoc($result);
}

if(isset($_POST['btn'])){
   
    $name = $_POST['productName'];
    $img =$_FILES['productImg']['name'];
    $img_tmp =$_FILES['productImg']['tmp_name'];
    $price = $_POST['productPrice'];
    $warranty = $_POST['productWarranty'];

    $sql = "UPDATE iphone SET name ='$name' ,image = '$img' , price ='$price' , warranty = '$warranty' WHERE id = '$id'";

    mysqli_query($connect,$sql);

    move_uploaded_file($img_tmp,'../webbanhang/img/product/'.$img);
    

    header('location:product.php');

}


?>

<h1>Sản phẩm</h1>

<form  method="post" enctype="multipart/form-data">
    <p>Tên sản phẩm</p>
    <input type="text" name="productName" value="<?php echo $product['name']?>">

    <p>Hình ảnh</p>
    <span><img width="100px" src="../webbanhang/img/product/<?php echo $product['image']?>" alt="aa"></span><br>
    <input type="file" name="productImg" value="<?php echo $product['name']?>">

    <p>Giá</p>
    <input type="text" name="productPrice" value="<?php echo $product['price']?>">

    <p>Bảo hành</p>
    <input type="text" name="productWarranty" value="<?php echo $product['warranty']?>">
    <br><br>
    <input type="submit" value="Lưu thay đổi" name="btn">
</form>
