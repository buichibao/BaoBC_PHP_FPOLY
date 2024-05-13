<?php

$students = array(
    ['name' =>"Bùi Chí Bảo", 'point' =>10],
    ['name' =>"Trần Đình Nam", 'point' =>9],
    ['name' =>"Nguyễn Chính Nhật", 'point' =>8],
);


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
            <th>Tên</th>
            <th>Điểm</th>
        </tr>
        <?php foreach($students as $student)  {?>
            <tr>
            <td><?php echo $student["name"] ?></td>
            <td><?php echo $student["point"] ?></td>
          </tr>
        <?php } ?>
    </table>
</body>
</html>