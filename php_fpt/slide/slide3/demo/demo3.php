<?php
// Xử lý PHP
$name = "Nguyễn Văn A";
// Mảng
$names = ["Nguyễn Văn A", "Lê Thị B"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Hello World</h1>
    <h2><?php echo $name; ?></h2>
    <?php if (strtolower($name) === "nguyễn văn a") {
        echo "<p style='color: red;'>Hợp lệ!</p>";
    } else {
        echo "<p>Không hợp lệ</p>";
    } ?>
    <ul>
        <?php foreach ($names as $item) { ?>
            <li style="color: aqua;" class=""><?php echo $item; ?></li>
        <?php } ?>
    </ul>
</body>

</html>