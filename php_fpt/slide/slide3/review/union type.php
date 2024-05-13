<?php

// Trong php , hàm và trong số có thể nhận nhiều kiểu dữ liệu được chỉ định khác nhau

function sum(int|float $number) : int|float{
    return $number +$number;
}

echo sum("4"); // tham số vẫn có thể nhận dạng chuỗi
echo sum("4.3");
echo sum(3);

?>