<?php

include("connect.php");

$sql = "SELECT * FROM thanhvien";

$result = mysqli_query($connect , $sql);

while($row = mysqli_fetch_array($result)){




?>  
 
    <tr>
        <td>  <?php echo $row['id']; ?> </td>
        <td>  <?php echo $row['taikhoan']; ?> </td>
        <td>  <?php echo $row['matkhau']; ?> </td>
        <td>  <?php echo $row['level']; ?> </td>
        <a href="edit.php?this_id= <?php echo $row['id'] ?>"> Chỉnh sửa </a>
        <a href="delete.php?this_id= <?php echo $row['id'] ?>"> Xoá </a>
        <br>
    </tr>


  
<?php } ?>