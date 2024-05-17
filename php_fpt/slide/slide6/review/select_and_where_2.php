<?php

$server = "localhost";
$user   = "root";
$pass   = "baobc";
$database = "review_connect";

$connect = new mysqli($server,$user,$pass,$database);

if($connect){
    echo "Kết nối thành công";
}else {
    echo "Kết nối thất bại";
}


$query = "SELECT * FROM user WHERE id = 2";

$result = $connect->query($query);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>ID</th>
            <th>Tên</th>
            <th>Tuổi</th>
            <th>Lớp</th>
        </tr>
        <?php 
          if($result->num_rows > 0){
            while($row = $result->fetch_array()){ ?>
                <tr>
                    <td> <?php echo  $row['id'] ?></td>
                    <td> <?php echo $row['name'] ?></td>
                    <td> <?php echo $row['age'] ?></td>
                    <td> <?php echo $row['class_name'] ?></td>
                </tr>
           <?php }
          }else {
            echo "Không tìm thấy người dùng có id";
          } 
          
          mysqli_free_result($result); // giải phóng bộ nhớ cho kết quả câu truy vấn

          $connect->close(); // đóng kết nối db
          
          ?>

    </table>
</body>
</html>