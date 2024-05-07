<?php
  include("connect.php");
  

  //Thêm dữ liệu vào

  $sql = "DELETE FROM thanhvien where id = 2";
  

  mysqli_query($connect,$sql);
?>