<?php
$students = [
    ["name" => "Nguyễn Văn A", "point" => 10],
    ["name" => "Nguyễn Văn B", "point" => 8.5],
    ["name" => "Nguyễn Văn C", "point" => 4.5]
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border="1">
        <tr>
            <th>Tên</th>
            <th>Điểm</th>
        </tr>
        <?php foreach ($students as $stu) { ?>
            <tr>
                <!-- <?php foreach ($stu as $item) { ?>
                    <td><?php echo $item; ?></td>
                <?php } ?> -->
                    
                <td><?php echo $stu["name"]; ?></td>
                <td><?php echo $stu["point"]; ?></td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>