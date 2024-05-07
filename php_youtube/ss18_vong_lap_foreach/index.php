<?php

//foreach dùng để duyệt tất cả các phần tử của mảng (chỉ dùng cho mảng)
$ten = array("bao","nam","pháp");

foreach($ten as $value){
    echo $value." ";
}

$tuoi = [22,23,24,25];

foreach($tuoi as $value){
    echo "$value \n ";
}

foreach($tuoi as $key => $value){
    echo "$key - $value \n";
}

$students = [
    0 => ["Bùi Chí Bảo",2001],
    1 => ["Bùi Chí Bảo2",2001],
    2 => ["Bùi Chí Bảo3",2001],
    3 => ["Bùi Chí Bảo4",2001],

];
//Sử dụng foreach để duyệt mảng 2 chiều
for ($i = 0 ; $i < count($students) ; $i++){
    for ($j = 0 ; $j < count($students[$i]) ; $j++){
         echo $students[$i][$j];
    }
    echo "\n";
}


$students = [
    "array1" => ["Bùi Chí Bảo",2001],
    "array2" => ["Bùi Chí Bảo2",2001],
    "array3" => ["Bùi Chí Bảo3",2001],
    "array4" => ["Bùi Chí Bảo4",2001],

];

foreach($students as $key=>$value){
    echo "$key" .":";
    foreach($value as $value){
        echo " $value ";
    }
    echo "\n";
}
?>