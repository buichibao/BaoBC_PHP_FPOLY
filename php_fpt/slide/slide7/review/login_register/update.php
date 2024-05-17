<?php
  include "connect.php";
  
  $mail_error = null;
  if(isset($_POST['back'])){
    header("location:list_user.php");
  }

  if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "SELECT * FROM user WHERE id = $id";
    $result = $connect->query($query);
    if($result->num_rows > 0){
        $row = $result->fetch_assoc();
    }
  }else {
    echo " Không tìm thấy id này";
  }

  if(isset($_POST['update'])){
    $id = $_POST['id'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    if(filter_var($email,FILTER_VALIDATE_EMAIL)){
        $query = "UPDATE user set username = '$username' ,email = '$email' WHERE id = '$id'";
        $connect->query($query);
        echo "<script>alert('Cập nhật thành công account thành công');</script>";
        echo "<script>window.location='list_user.php';</script>";
    }else {
         $mail_error ="email không hợp lệ ,mời bạn nhập lại mail";
         $row['email'] = $email;
    }
  
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
    <form action="update.php?id=<?php echo $row['id']?>" method="post">
        <input type="text" name="id" value="<?php echo $row['id']?>" hidden>
        <input type="text" name="username" value="<?php echo $row['username']?>"><br>
        <input type="text" name="email" value="<?php echo $row['email']?>"><br>
        <p><?php echo $mail_error ?></p>
        <input type="submit" value="back"   name="back">
        <input type="submit" value="update" name="update">
    </form>
</body>
</html>