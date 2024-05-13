<?php
$a = "Stringn";

$b = str_replace('i','o',$a); // Thay thế i = o trong chuỗi a
echo $b."\n";

$b = substr_replace($a,"My ",0,0); // Chèn vị "My " và vị trí thứ 0 và 0 xoá phần từ nào vào chuỗi $a
echo $b."\n";

$b = substr($a,1,3);  // Lấy ra từ chuỗi $a 3 phần tử từ vị trí 1
echo $b."\n";

$b = strtoupper($a); // In hoa
echo $b."\n";

$index = strpos($a,'n'); //Tìm chữ n ở vị trí số mấy trong chuỗi $a
echo $index."\n";

$length = strlen($a); // Lấy ra độ dài của chuỗi , kể cả khoảng trống
echo $length;

?>