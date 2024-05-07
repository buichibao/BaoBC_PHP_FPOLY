<?php

include("connect.php");

$sql = "SELECT * FROM thanhvien";

$result = mysqli_query($connect,$sql);


if(mysqli_num_rows($result) > 0){   // tổng số hàng trong đb
    while($row = mysqli_fetch_array($result)){ // mỗi lần trả về 1 hàng trong đb dưới dạng mảng theo key = tên cột 
        echo $row['id'] ."<br>";
    }
}


?>