<?php
/*Trong php , có 4 loại vòng lặp thường dùng :
  1.for
  2.while
  3.do- while
  4.foreach : thường được sử dụng để duyệt mảng và các kiểu dữ liệu cấu trúc
*/
// for
for($i = 0 ; $i < 10 ; $i ++){
    echo $i."\n";
}

$string = "Bui Chi Bao";
for($i = 0 ; $i < strlen($string) ; $i++){
    echo $string[$i]."-";
}

$arr = [2,3,4,5];
for ($i = 0 ; $i < count($arr);$i++){
    echo $arr[$i];
}

//while
$i = 0;
while($i < 10){
    echo $i."\n";
    $i++;
}
// do- while
$i = 0;
do {
    echo $i."\n";
    $i++;
}while($i < 10);


//foreach
$array = array(1,2,3,4);
foreach($array as $value){
    echo $value." ";
}
?>