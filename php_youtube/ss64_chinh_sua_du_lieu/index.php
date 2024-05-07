<?php

include("connect.php");

// $sql = "INSERT INTO thanhvien (id, taikhoan, matkhau)
// values('','bao2202','123321'),
//       ('','nam','123321'),
//       ('','nhat','123321'),
//       ('','phap','123321')";


// $sql = "DELETE FROM thanhvien where id = 6";      


// $sql = "UPDATE  thanhvien SET level = 1 where id = 7"; 


$sql = "SELECT * FROM thanhvien";

$result = mysqli_query($connect,$sql);

while($row = mysqli_fetch_array($result)){


?> 

 <h1> <?php echo $row['id']."-".$row['taikhoan']."-".$row['matkhau']."-".$row['level']; ?> </h1>
   
<?php } ?>