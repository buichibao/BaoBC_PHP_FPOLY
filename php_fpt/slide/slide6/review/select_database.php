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

$query = "SELECT * FROM user";
$get_data = $connect->query($query);
if($get_data){
    echo "Lấy dữ liệu thành công";
}else{
    echo "Lấy dữ liệu thất bại";
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
    <table>
        <tr>
            <th>ID</th>
            <th>Tên</th>
            <th>Tuổi</th>
            <th>Lớp</th>
        </tr>
    <?php  while($row = mysqli_fetch_array($get_data)){ ?>
         <tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['name'] ?></td>
            <td><?php echo $row['age'] ?></td>
            <td><?php echo $row['class_name'] ?></td>
         </tr>
        

     <?php } ?>
    </table>
</body>
</html>