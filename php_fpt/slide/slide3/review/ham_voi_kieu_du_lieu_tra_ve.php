<?php
// PHP 7 trở lên , php hỗ trợ hàm có kiểu dữ liệu trả về

function sum($a , $b): int {
   return $a + $b; // ở đây phải trả về đúng kiểu dữ liệu bên trên khai báo
}
echo sum(2,3);


?>