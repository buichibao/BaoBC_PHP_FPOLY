<?php

//Trong php, isset dùng để xoá biến trong phạm vi hiện tại

$var = 10;

if(!empty($var)){
    echo "var = $var\n";
}else {
    unset($var);
}

echo $var;

?>