<?php
require('connectDb.php');
if(isset($_GET['hanhdong']) && isset($_GET['id'])) {
    $hanhdong = $_GET['hanhdong'];
    $id = $_GET['id'];
    if($hanhdong === 'xoa' && !empty($id)) {
        $queryDelete = "delete from users where id = " . $id;
        if(mysqli_query($conn, $queryDelete)) {
            echo 'Xóa thành công!';
            header('location: index.php'); // Lệnh chuyển trang trong PHP
        } else {
            echo 'Xóa không thành công!';
        }
    }
}
$query = "select * from Users";
$results = mysqli_query($conn, $query);
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
    <table border="1">
        <tr>
            <th>Mã</th>
            <th>Tên tài khoản</th>
            <th>Mật khẩu</th>
            <th>Chức năng</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($results)) { ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['username']; ?></td>
                <td><?php echo $row['password']; ?></td>
<td>
    <a href="">Sửa</a> | 
    <a href="index.php?hanhdong=xoa&id=<?php echo $row['id'] ?>">Xóa</a>
</td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>