<?php

//is_null : kiểm tra 1 biến có phải là null hay không
// true : nếu biến chưa được khai báo hoặc biến = null

if(is_null($a)){
    echo "a = null\n";
}

$a = null;
if(is_null($a)){
    echo "a = null";
}

 $a = "null";
 if(is_null($a)){
    echo "a = null";
}

?>