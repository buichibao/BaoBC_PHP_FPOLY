<?php

$var_int = 123;
$var_float = 10.5;
$var_boolean = true;
$var_string = "Bùi Chí Bảo";
$var_null = NULL;
$var_array = array(1,2,3,4);
$var_object = new ArrayObject(); 
$var_rescoure = fopen("text.txt","r");

echo var_dump($var_int). "\n";
echo var_dump($var_float). "\n";
echo var_dump($var_boolean). "\n";
echo var_dump($var_string). "\n";
echo var_dump($var_null). "\n";
echo var_dump($var_array). "\n";
echo var_dump($var_object). "\n";

?>