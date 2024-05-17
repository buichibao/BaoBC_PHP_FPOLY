<?php
require('connectdb.php');
$results = mysqli_query($conn, 'select * from users');
if(isset($_GET['btnSearch'])) {
    $keyword = $_GET['search'];
    if($keyword !== '') {
        $querySearch = "select * from users where username like '%$keyword%'";
        $results = mysqli_query($conn, $querySearch);
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User management</title>
</head>

<body>
    <form action="" method="get">
        <input type="text" name="search" placeholder="Mời nhập vào username muốn tìm">
        <button name="btnSearch">Search</button>
    </form>
    <a href="create.php">Thêm mới user</a>
    <table border="1">
        <tr>
            <th>Id</th>
            <th>Username</th>
            <th>Password</th>
            <th>Action</th>
        </tr>
        <?php while ($row = mysqli_fetch_array($results)) { ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['username']; ?></td>
                <td><?php echo $row['password']; ?></td>
                <td>
                    <a href="update.php?id=<?php echo $row['id'] ?>">Update</a>
                    <a href="delete.php?id=<?php echo $row['id'] ?>">Delete</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>
<?php 
mysqli_free_result($results);
mysqli_close($conn);

?>