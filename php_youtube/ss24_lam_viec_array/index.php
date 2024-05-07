<?php

$name1 = array("bảo","nam","nhật");

$name2 = array(0 =>"bảo an",1=>"nam hoàng",2=>"nhật anh");

//print_r(tên mảng):hiển thị thông tin cả mảng

print_r($name1);
echo "\n";
print_r($name2);
echo "\n";

//count(tên mảng): trả về độ dài của mảng
 echo count($name1);
 echo "\n";

 //thêm phần tử : nếu k truyền index thì mặc định phần tử vừa thêm sẽ nằm ở vị trí cuối cùng (nếu thêm index đã có thì nó sẽ thay thế , thêm index không có thì nó vẫn thêm bình thường)

 $name2[]="văn toàn"; 
 $name2[100] ="quỳnh thắm";
 print_r($name2);
 echo "\n";

 //thay thế hoặc sửa phần tử : thì truyền giá trị mới cho index cần thay thế
 $name2[100] ="khánh loan";
 print_r($name2);
 echo "\n";

 // unset(index cần xoá) : xoá phần tử theo vị trí mình truyền vào
 
 unset($name1[100]); // truyền vào vị trí k có thi vẫn giữ nguyên mảng
 print_r($name1);
 echo "\n";
 unset($name1[1]); 
 print_r($name1);
 echo "\n";
?>