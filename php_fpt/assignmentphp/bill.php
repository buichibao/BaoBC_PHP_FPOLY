<?php
   session_start();
   include("connect.php");

   $username = $_SESSION['mysession'];
   $user_id_session = mysqli_query($connect,"SELECT id FROM users where username = '$username'");
   while($row = mysqli_fetch_assoc($user_id_session)){
      $user_id = $row['id'];
   }



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="product_user.php">Quay lại trang chủ</a>
    <table>
        <h1>Hoá đơn</h1>
        <tr>
            <th>Tên sản phẩm </th>
            <th>Số lượng</th>
            <th>Đơn giá</th>
            <th>Giá từng loại</th>
        </tr>
    <?php
      $total = 0;
      for($i = 0 ; $i < count($_SESSION['list_product']) ; $i++){
        $product_id =$_SESSION['list_product'][$i];
        $sql = "SELECT * FROM cart join products on products.id = cart.product_id
        join users on  users.id = cart.user_id
        join categories on  categories.id = products.category_id
        where cart.user_id = (SELECT id FROM users where username = '$username') and cart.product_id = $product_id";
        $bill = mysqli_query($connect,$sql);
        $row = mysqli_fetch_array($bill) ?>
         <tr>
            <td><?php echo $row['productname'] ?></td>
            <td><?php echo $row['quantity'] ?></td>
            <td><?php echo $row['price'] ?></td>
            <td><?php echo $row['price']*$row['quantity'] ?></td>
         </tr> 
         
    <?php $total +=  $row['price']*$row['quantity']; } ?>
    <tr>
      <td colspan="4"><hr></td>
    </tr>
    
    <tr>
            <td style="color:red">Tổng :</td>
            <td></td>
            <td></td>
            <td style="color:red"><?php echo $total ?></td>
         </tr>  
        
    </table>
    <?php 
      $bill = mysqli_query($connect,"SELECT * FROM bill WHERE user_id = $user_id");
      $row = mysqli_fetch_assoc($bill);
    ?>
    <p><span>Địa chỉ : </span><?php echo $row['address'] ?></p>
    <p><span>Số điện thoại:<?php echo $row['phone_number'] ?> </span></p>
    <p><span>Ghi chú : </span><?php echo $row['note'] ?></p>
    
</body>
</html>