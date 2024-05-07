<?php

//hàm ẩn danh 1
$say = function($name){
    echo "Hello ".$name;
};
echo $say('Bao');


//hàm ẩn danh 2

function myFunction($callback){
    $callback();
}

myFunction(function(){
    echo "Hello " ;
});



//hàm ẩn danh 3

$a = array(1,2,3,4,5);
$b = array_map(function($value){
   return $value *2;
},$a);

print_r($b);
?>