<?php

$a = "String";

$result = str_replace("i","o",$a); //dùng để thay thế 1 chuỗi bằng 1 chuỗi khác trong chuỗi gốc
echo $result."\n";


$result = substr_replace($a,'My',0,0); // chèn và thay thế theo vị trí
echo $result."\n";

$result = substr($a, 0 , 4); //lấy chuỗi con của chuỗi gốc
echo $result."\n";

$result = strtoupper($a); // viết hoa chuỗi
echo $result."\n";


$result = strtolower($a); // viết thường chuỗi
echo $result."\n";

$result = strpos($a,"i"); // tình chuỗi con và trả về vị trí đầu tiên của nó xuất hiện trong chuỗi ( không tìm thấy trả về "")
echo $result."\n";

$result = strlen($a); // lấy ra số lượng phần tử trong chuỗi kể cả khoảng trắng
echo $result."\n";

?>