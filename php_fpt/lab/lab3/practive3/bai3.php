<?php

$string = "123456";
$string = chunk_split($string ,2 ,":");
$string = substr($string ,0 ,-1);
echo $string;
?>