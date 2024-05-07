<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body> 
     <div class="add"><a href="add_product.php">Thêm sản phẩm</a></div>
    <table>
        <tr>
            <th>ID</th>
            <th>Tên sản phẩm</th>
            <th>Hình ảnh</th>
            <th>Giá sản phẩm</th>
            <th>Thời gian bảo hành</th>
        </tr>
 
        <?php
           include 'connect.php';

           $sql = "SELECT * FROM iphone";

           $iphoneList = mysqli_query($connect ,$sql);

           if(mysqli_num_rows($iphoneList) > 0){
            while($row = mysqli_fetch_array($iphoneList)){
                
        ?>
           <tr>
            <td><?php echo $row['id']  ?></td>
            <td><?php echo $row['name']  ?></td>
            <td><img src="../webbanhang/img/product/<?php echo $row['image'] ?>" width="60px" height="60px" alt=""></td>
            <td><?php echo $row['price']  ?></td>
            <td><?php echo $row['warranty']  ?></td>
            <td><a href="edit.php?this_id=<?php echo $row['id'] ?>">Chỉnh sửa</a></td>
            <td><a href="delete.php?this_id=<?php echo $row['id'] ?>">Xoá</a></td>
            <br>
           </tr>

        <?php   }
        } ?>

    </table>

  
</body>
</html>