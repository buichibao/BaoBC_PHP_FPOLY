<?php
if(isset($_GET['id'])) {
    $idcanxoa = $_GET['id'];
}
if(isset($_GET['submit'])) {
    if($_GET['submit'] == 'xoa') {
        require('connectdb.php');
        if(mysqli_query($conn, "delete from users where id=$idcanxoa")) {
            header('Location: index.php');
        } else {
            echo 'Xóa không thành công!';
        }
        mysqli_close($conn);
    } else {
        header('Location: index.php');
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Bạn có chắc chắn muốn xóa user id = 
        <?php echo $idcanxoa; ?></h1>
    <form action="" method="get">
        <input type="hidden" name="id"
        value="<?php echo $idcanxoa ?>">
        <br>
        <button name="submit" value="xoa">CÓ</button>
        <button name="submit" value="huy">HỦY</button>
    </form>
</body>
</html>