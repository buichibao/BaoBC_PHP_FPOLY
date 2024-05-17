<?php
   include"connect.php";
   
   if(isset($_GET['id'])){
      $id = $_GET['id'];
      $query = "SELECT * FROM user WHERE id = $id";
      $result = $connect->query($query);
      if(($result->num_rows) > 0){
        $row = $result->fetch_array();
      }
   }
        
    if(isset($_POST['delete'])){
           if(($result->num_rows) > 0){
             $query = "DELETE FROM user WHERE id = $id";
             $connect->query($query);
             echo "<script>alert('Xoa thành công account thành công');</script>";
             echo "<script>window.location='list_user.php';</script>";
            } 

    }

    if(isset($_POST['cancel'])){
        echo "<script>window.location='list_user.php';</script>";
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
<form action="" method="post">
       <p>Bạn có muốn xoá không <?php echo $row['username'] ?></p>
        <input type="submit" value="delete" name="delete">
        <input type="submit" value="cancel" name="cancel">
    </form>

    
</body>
</html>