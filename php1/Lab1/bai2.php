<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="bai2.php" method="post">
        <input type="text" name="name" placeholder="Nhập tên">
        <input type="text" name="age" placeholder="Nhập tuổi">
        <input type="submit" name="submit" value="Gửi">
    </form>
    <?php
    if (isset($_POST['submit']) && ($_POST['submit'])) {
        $name = $_POST['name'];
        $age = $_POST['age'];
        $result = '<p> Hello , xin chào '.$name.', '.$age.'</p>';
        echo $result;
    }
   
    ?>
</body>

</html>