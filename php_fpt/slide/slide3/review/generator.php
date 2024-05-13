<?php
//generator :là 1 hàm được sử dụng để trả về nhiều kết quả 1 lần sau từ khoá yield
$x = 5;
function arr(){
    global $x;
    yield 1;
    yield from array(2,3,4); //Khi trả về mảng phải đi kèm với từ khoá from
    yield $x;
}

foreach(arr() as $value){
    echo $value;
}

?>