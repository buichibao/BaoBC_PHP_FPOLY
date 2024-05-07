<?php

$array = array("xin","chào","các","bạn");

//impolde("kí tự bạn muốn phân cách giữ các từ", tên mảng cần nối);
$string = implode("-",$array);

var_dump($string);
?>