<?php

//isset(tên biến) : kiểm tra biến đã được khai báo  hoặc có giá trị # null (true)
//empty(tên biến) : kiếm tra biến chưa được khai báo  hoặc có các giá trị null , false , "0", '0',"",'' (true);

if(empty($a)){
    echo "chưa được khai báo";
}else{
    echo " đã tồn tại";
}

echo "\n";

if(isset($b)){
    echo "đã tồn tại";
}else{
    echo "chưa tồn tại";
}

$c = false;
if(empty($c)){
    echo "chưa được khai báo";
}else{
    echo " đã tồn tại";
}

echo "\n";

$d = false;
if(isset($d)){
    echo "đã tồn tại";
}else{
    echo "chưa tồn tại";
}
?>