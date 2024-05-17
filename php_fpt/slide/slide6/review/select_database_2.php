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
    <?php  while($row = $result->fetch_array(MYSQLI_NUM)){ ?>
         <tr>
            <td><?php echo $row[0] ?></td>
            <td><?php echo $row[1] ?></td>
            <td><?php echo $row[2] ?></td>
            <td><?php echo $row[3] ?></td>
         </tr>
        

     <?php } ?>
    </table>
</body>
</html>