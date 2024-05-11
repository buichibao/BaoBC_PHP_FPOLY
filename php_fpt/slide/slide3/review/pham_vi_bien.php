<?php
  
  //Trong PHP , biến nào được sử dụng trong hàm đều bị giới hạn ở phạm vi local

  $x = 10;  // global $x
  function local(){
    //echo $x;  // Không thể sử dụng được $x bằng cách này
  }
  local();

  $y = 20;
  function local2(){
    global $y;
    echo $y;
  }
  local2();

?>