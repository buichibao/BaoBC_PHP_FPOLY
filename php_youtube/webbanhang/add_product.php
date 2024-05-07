<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
       include 'connect.php'; 

       if(isset($_POST['btn'])){
          $name =$_POST['nameProduct'];
          $img =$_FILES['imgProduct']['name'];
          $img_tmp =$_FILES['imgProduct']['tmp_name'];
          $price =$_POST['priceProdcut'];
          $warrany = $_POST['warrantyProduct'];

          $sql = "INSERT INTO  iphone (name,image , price ,warranty)
          values ('$name' ,'$img',$price,'$warrany')";

          move_uploaded_file($img_tmp , '../webbanhang/img/product/'.$img);


          mysqli_query($connect ,$sql);

          header('location:product.php');
           
        
       }
    ?>
    <form action="add_product.php" method="post" enctype="multipart/form-data">
        <label for="nameProduct">Tên sản phẩm</label>
        <input type="text" name="nameProduct" id="nameProduct" required ><br>

        <label for="imgProduct">Hình ảnh</label>
        <input type="file" name="imgProduct" id="imgProduct" required ><br>

        <label for="priceProdcut">Giá sản phẩm</label>
        <input type="number
        " name="priceProdcut" id="priceProdcut" required ><br>

        <label for="warrantyProduct">Thời gian bảo hành</label>
        <input type="text" name="warrantyProduct" id="warrantyProduct" required ><br>

        <input type="submit" value="Thêm sản phẩm" name="btn">
    </form>
</body>
</html>