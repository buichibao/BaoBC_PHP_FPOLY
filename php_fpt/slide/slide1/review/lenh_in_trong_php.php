<?php
/*Trong php có 2 lệnh thường được sử dụng để in , hoặc xuất kết quả đó là :
  1.echo : ưu tiên sử dụng hơn , không có giá trị trả về , có thể in ra liên tiếp giá trị bằng cách nối ("," , ".")
  2.print: ít được sử dụng hơn , có giá trị trả về là 1 mỗi khi in thành công , in chậm hơn echo
  3.printf: in theo định dạng , và trả về số lượng kí tự , tính cả khoảng trống
  4.sprintf : không trực tiếp in ra mà trả về giá trị theo định dạng
  5.print_r : dùng để in 1 biến hoặc 1 mảng
  6.var_dump : hiển thị tất cả thông tin của biến , kiểu dữ liệu , giá trị ,số lượng
*/
$a = 10;
echo $a."\n";

print $a."\n";

printf("Số a = %d",$a);
echo "\n";

$result = sprintf("Bảo %d tuổi",$a);
echo $result;

$name = "Bảo";
print_r($name);

$list_name = array("A","B","C");
print_r($list_name);

var_dump($list_name);

?>