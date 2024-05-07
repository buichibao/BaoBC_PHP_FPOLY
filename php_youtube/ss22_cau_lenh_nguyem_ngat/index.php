<?php  declare(strict_types = 1); //yêu cầu nghiêm ngặt về kiểu dữ liệu hơn



function add(int $a, int $b): int {
    return $a + $b;
}

// $result = add(5, '10');  //báo lỗi không trùng khớp kiểu dữ liệu nhưng nó vẫn chạy bình thường

echo $result;  

?>