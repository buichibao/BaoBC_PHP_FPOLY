<?php

$string1 = "Bui Chi Bao";
$string2 = "Bui ! Chi <> Bao";


echo $string1."<br>";
echo $string2."<br>";

$locString1 = filter_var($string1, FILTER_SANITIZE_STRING); //loại bỏ đi 1 số kí tự đặc biệt < > " '
$locString2 = filter_var($string2, FILTER_SANITIZE_STRING);

echo $locString1."<br>";
echo $locString2."<br>";
?>