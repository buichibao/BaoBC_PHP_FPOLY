<?php

function cube($a){
    return $a*$a*$a;
}
$array = [1,2,3,4,5];
$array2 = array_map("cube",$array);
print_r($array2);

//Bài 1

$arr1 = ["Nguyễn Văn A","Nguyễn Văn B"];
$arr2 = [];

for($i = 0 ;$i <  count($arr1);$i++){
    $arr2[] = "Hello ".$arr1[$i];
}
foreach($arr2 as $value){
    echo "$value \n";
}

//
$arr3 = [];
function noiChuoi($name){
     return "Hello ".$name;
}

$arr3 = array_map("noiChuoi",$arr1);
print_r($arr3);

//Hàm ẩn danh

//Sử sụng closure

//Sử dụng arrow function


//Từ khoá yield

function getString(){
    return 1;
    return 2;
    return 3;
}
echo getString();
   

function getString2(){
    yield 1;
    yield 2;
    yield 3;
}
echo var_dump(getString2()); // đối tượng

foreach(getString2() as $value){
    echo $value."\n";
}



function traSonguyen():int {
   return 1;
}
echo traSonguyen();

// NULLABLE 
function noiChuoi2(?string $name): string
{
    return ($name == null )?(" Hello null"):("Hello ".$name);
}
echo noiChuoi2(null);
?>


 