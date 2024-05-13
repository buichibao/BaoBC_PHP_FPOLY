<?php
// empty : dùng để kiểm tra xem 1 biến có là giá trị rỗng hay không
// giá trị rỗng bao gồm : null , false , 0 , "" chuỗi rỗng, hoặc chưa khai báo
// nếu phải thì : true , còn không phải các giá trị trên thì bằng false

if(empty($a)){
    echo "a có giá trị rỗng\n";
}

$a = null;
if(empty($a)){
    echo "a có giá trị rỗng\n";
}

$a = 0;
if(empty($a)){
    echo "a có giá trị rỗng\n";
}

$a = false;
if(empty($a)){
    echo "a có giá trị rỗng\n";
}
$a = "";
if(empty($a)){
    echo "a có giá trị rỗng\n";
}
$a = 2;
if(empty($a)){
    echo "a có giá trị rỗng\n";
}else {
    echo "a không rỗng";
}



?>