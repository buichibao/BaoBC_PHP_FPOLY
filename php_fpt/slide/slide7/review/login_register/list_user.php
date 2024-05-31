<?php

include "connect.php";

if(isset($_GET['search'])){
    $username = $_GET['namesearch'];
    $query = "SELECT * FROM user WHERE  username like '%$username%'";
    $result = $connect ->query($query);
}else {
    $query = "SELECT * FROM user";
    $result = $connect ->query($query);
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
    <form action="list_user.php" method="get">
        <input type="text" name="namesearch" >
        <input type="submit" name="search" value="Tìm kiếm">
    </form>

    <table>
        <tr>
            <td>ID</td>
            <td>User Name</td>
            <td>Email</td>
            <td>Delete</td>
            <td>Update</td>
        </tr>
        <?php  
           if($result->num_rows > 0){
            while($row = $result->fetch_array()){ ?>
        <tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['username'] ?></td>
            <td><?php echo $row['email'] ?></td>
            <td><a href="delete.php?id=<?php echo $row['id'] ?>">DELETE</a></td>
            <td><a href="update.php?id=<?php echo $row['id'] ?>">Update</a></td>
        </tr>
            <?php }
           } ?>

    </table>
</body>
</html>