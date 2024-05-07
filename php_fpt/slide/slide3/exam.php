<?php

$x = 4;

function assignx(){
    $x = 0;
    echo "value x trong hàm = $x \n";
}

assignx();
echo "value x ngoài hàm = $x";


bar();  // lỗi
if(true){
    function bar(){
        echo "Hàm bar()";
    }
}
bar(); // chạy ok

?>