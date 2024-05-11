<?php
  


  echo (2==3)."\n";
  echo (2!=3)."\n";
  echo (2 <> 3)."\n";
  echo (2 === 3)."\n";
  echo (2 !== 3)."\n";
  echo (2 > 3)."\n";
  echo (2 < 3)."\n";
  echo (2 >= 3)."\n";
  echo (2 <= 3)."\n";
  echo (2 == "2")."\n";
  echo (2 === "2")."\n";

  //Toán tử so sáng <=> trả về 3 kết quả (1,0,-1) : không phân biệt kiểu dữ liệu
  /* 
    1 : khi a > b
    0 : khi a = b
    -1 : khi a < b
  
  */
  echo (2 <=> 3);
  echo (2 <=> 2);
  echo (2 <=> "1");


?>