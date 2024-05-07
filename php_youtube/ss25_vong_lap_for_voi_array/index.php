<?php
//Sử dụng foreach trong php có thể dùng để duyệty mảng index và jSon
$name = array("bảo","nam","nhật","pháp");

foreach( $name as $value){
    echo
     "$value -";
}

echo "\n";

$address = [
    "HT"=>"Hà Tĩnh",
    "HN"=>"Hà Nội"
];
foreach( $address as $value){
    echo "$value -";
}

echo "\n";

//Sử dụng For:chỉ dùng được cho array index
for($i = 0 ; $i < count($name) ; $i++){
    echo $name[$i]."\n";
}



?>