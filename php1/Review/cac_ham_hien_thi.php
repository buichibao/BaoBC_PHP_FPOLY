<?php
   //hàm echo : dùng để hiển thị , không trả về
   echo "Hello bạn";

   //hàm prinf : giống echo nhưng trả về kết quả 1 khi in thành công
   print "Hello em";
   
   //hàm printf : in theo định dạng %d (integer- nếu truyền số thực thì tự động ép kiểu) , %s (string) , %f (float)
   $result = printf("Số thực : %f - Số nguyên : %d - Chuỗi : %s",3.14,4,"Bùi Chí Bảo");
   echo $result;
   $variable = sprintf("Số thực : %f - Số nguyên : %d - Chuỗi : %s",3.14,4,"Bùi Chí Bảo"); 
   echo $variable;

   //hàm print_r : sử dụng để in mảng và bieesn
   $array = array("name1"=>"Bảo","name2"=>"Nam");
   print_r($array);

   $int = [1,2,3,4,5];
   print_r($int);

   $name = "Bảo";
   print_r($name);

   //var_dump : để hiển thị chi tiết thông tin của 1 biến
   $array = [1,"Bùi Chí Bảo",9.8];
   var_dump($array);
?>