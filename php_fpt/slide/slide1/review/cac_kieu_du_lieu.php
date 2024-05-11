<?php
   /* Các kiểu dữ liệu trong php
      1.int
      2.float
      3.string
      4.boolean
      5.null
      6.array
      7.object
      8.resoure(file)
   */
   
   $var;  /*
        Từ php 8 , biến phải được khởi tạo trước khi sử dụng , nếu không sẽ bị exeption; 
        Các phiên bản trước , khi không khởi tạo mặc định biến sẽ = null   
   */

   $var_int = 1;
   $var_float = 10.5;
   $var_string = "Bùi Chí Bảo";
   $var_isMale = true;
   $var_null = null;
   $var_array = array(1,2,3);
   $var_object = new Attribute();

   echo var_dump($var);
   echo var_dump($var_int);
   echo var_dump($var_float);
   echo var_dump($var_string);
   echo var_dump($var_isMale);
   echo var_dump($var_null);
   echo var_dump($var_object);

   //Kiểu dữ liệu null
   $myNull  = null;
   echo $myNull."\n"; //  = null nó in ra khoảng trắng
   $myInt   = $myNull + 0;
   echo $myInt."\n"; // = 0
   $myBool = $myInt == false;
   echo $myBool."\n"; // = 1 vì true bằng 1

   //Kiểu string
   $a = "Word";
   echo "Hello $a";
   echo 'Hello $a';


?>