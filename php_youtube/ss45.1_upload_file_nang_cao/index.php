<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="xuly.php" method="post"  enctype="multipart/form-data">
        <input type="file" name="hinhanh" value="Chọn ảnh">
        <span> <?php $errorFile ?> </span> <br>
        <input type="submit" value="Gửi" name="btn">
    </form>
</body>
</html>

<?php



?>