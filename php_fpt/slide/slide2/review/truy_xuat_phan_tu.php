<?php
// Trong PHP ,có thể truy xuất các phần tử thông qua index hoặc key vì mảng được lưu trữ dưới dạng key- value

$array_1 = array(1,2,3,4,5,6);
print_r($array_1);


$array_2 = array(
    'one'=> "Bảo",
    'two'=> "Chí",
    'three'=>"Bảo"
);
print_r($array_2);


$array_3 = array(
    'a' => 1,
    'b' => 2,
     3,      //bắt đầu từ index[0] nếu không có key
     'c' => 4,
     5      //[1]
);
print_r($array_3);


$array_4 = array(5 => 5, 6); 
print_r($array_4);

?>