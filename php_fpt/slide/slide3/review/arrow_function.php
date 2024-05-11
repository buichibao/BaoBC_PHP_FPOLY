<?php
/*
  Arrow function cú pháp ngắn gọn hơn và dùng để thay thể amonyus function
  Thay function = fn
  Thay return   = =>
*/

$x = 10 ; $y = 20;
$myFunction = fn($z) => $x +$y +$z; //Nó có thể sử dụng luôn các biến phái ngoài hàm
echo $myFunction(20);
?>