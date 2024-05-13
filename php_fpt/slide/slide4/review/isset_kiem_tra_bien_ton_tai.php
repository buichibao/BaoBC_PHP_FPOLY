<?php

//Trong PHP , hàm isset được sử dụng để kiểm tra biến đã tồn tại hoặc null hay không(nó k sử dụng được với hằng số)
// true : tồn tại hoặc khác null
// false: chưa tồn tại hoặc bằng null

$a = 0;
if(isset($a)){
    echo "a đã tồn tại\n";
}

if(isset($b)){
    echo "b đã tồn tại";
}else {
    $b = 10;
    echo $b."\n";
}

$c = null;
if(isset($c)){
    echo "c đã tồn tại";
}else {
    echo "c = null";

}

$d = "null";
if(isset($d)){
    echo "d đã tồn tại";
}else {
    echo "d = null";

}



?>