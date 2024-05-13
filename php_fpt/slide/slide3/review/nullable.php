<?php

function number(?int $n){
    return $n === null ?"null":$n;
}

echo number(null);
echo number(3.2); //nó sẽ bị ép kiểu thành int vì đầu vào chỉ nhận int


?>