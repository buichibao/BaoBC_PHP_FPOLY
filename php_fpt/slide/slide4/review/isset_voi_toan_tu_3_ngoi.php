<?php

$number = isset($x)? $x : "unknow";
echo $number;

$number = $x ?? "unknow";  // viết tắt của isset với toán tử 3 ngôi
echo $number;

$y = 0;
$result = isset($y)?$y:"unknow";
echo $result;

if(!isset($name)){
    $name = "unknow";
}
$name ??="unknow";echo $name; // giống cái trên




?>