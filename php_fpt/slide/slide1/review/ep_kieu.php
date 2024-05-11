<?php
/*
  Cú pháp ép kiểu trong PHP
  (type)$variable
*/

$var_bool_1  = true;
$var_bool_2  = false;
$var_float  = 10.5;
$var_string_1  = "Chuỗi không có số";
$var_string_2  = "5 Bảo tuổi"; // số nằm đầu mới ép được
$var_string_3  = " 669 Mai Thục Loan 8";

echo (int)$var_bool_1;  //1
echo (int)$var_bool_2; //0
echo (int)$var_float;  //10
echo (int)$var_string_1; //0
echo (int)$var_string_2; //5
echo (int)$var_string_3; //669


?>