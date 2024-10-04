<?php

// for
$array = array(1,2,3,4,5,6,7,8,9);
for ($i = 0 ; $i < count($array) ; $i++){
    echo $array[$i];
}

// while
$i = 0;
while($i < count($array)){
    echo $array[$i];
    $i++;
}

// do - while 
$i = 0;
do {
    echo $array[$i];
    $i++;
}while($i < count($array));

//foreach

$array = [3,4,5,6];
//lấy value
foreach($array as $key=>$value){
    echo $value;
}
//lấy key
foreach($array as $key=>$value){
    echo $key;
}
//lấy value
foreach($array as $value){
    echo $value;
}

//từ khoá break
$array = [3,4,5,6];
foreach($array as $key=>$value){
    if($key == 2){
        break;
    }
    echo $value,'-',$array[$key];
}

//Từ khoá continue
$array = [
    'id'=>1,
    'name'=>'Bùi Chí Bảo',
    'age'=>23,
    'address'=>'Hà Tĩnh'
];

foreach($array as $key=>$value){
    if($key =='age'){
        continue;
    }
    echo $array[$key];
}

?>