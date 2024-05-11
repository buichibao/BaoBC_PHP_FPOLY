<?php

$array = [1,2,3,4,5];
echo $array[0]."\n"; //1
echo $array[1]."\n"; //2
echo $array[2]."\n"; //3
echo $array[3]."\n"; //4
echo $array[4]."\n"; //5


$array = [
    "one"=>10,
    "two"=>100,
    "three"=>1000,
    "four"=>10000,
];
echo $array["one"]."\n";   //10
echo $array["two"]."\n";   //100
echo $array["three"]."\n"; //1000
echo $array["four"]."\n";  //10000


$array = [5=>5,6];
print_r($array); // 5=>5 ,6 => 6 key sẽ tự động tăng 


$array = [
    "one"=>"a",
    "product"=>"laptop",
     1,
     10,
     array(1,2,3,4)
];
print_r($array);

?>