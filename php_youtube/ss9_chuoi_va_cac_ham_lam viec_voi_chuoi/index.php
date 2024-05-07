<?php

 //một số hàm cơ bản làm việc với chuỗi
 
 $string1 = "bui chi bao";

 $string2 = "Bùi Chí Bảo";

 //strlen(): lấy ra độ dài của chuỗi (có dấu # không dấu)
 
 echo strlen($string1)."\n";

 echo strlen($string2)."\n";

 //str_word_count(): đếm bao nhiêu từ (có dấu # không dấu)

 echo str_word_count("$string1")."\n";
 echo str_word_count($string2)."\n";

 //strrev() : đảo ngược chuỗi
 
 echo strrev("$string1")."\n";
 
 //strpost : tìm kiếm 1 chuỗi trong 1 chuỗi cha
 // nếu tìm thấy trả về vị trí đầu tiên của chuỗi đó , nếu k thấy k trả về giá trị
 echo strpos("$string1","b")."\n";

 //str_replace : thay thế 1 chuỗi 

 echo str_replace("bui","tran","$string1")."\n";

?>