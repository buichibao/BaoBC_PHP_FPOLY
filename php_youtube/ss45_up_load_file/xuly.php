<?php


if($_SERVER["REQUEST_METHOD"] == "POST"){
    $image = $_FILES["hinhanh"];  //trả về 1 mảng nên muốn hiển thị thông tin nên dùng print_r

    print_r($image);

}

?>