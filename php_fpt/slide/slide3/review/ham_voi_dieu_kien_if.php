<?php
move(); // Hàm này chỉ khi điều kiện đúng mới được khai báo , nên trong trường hợp gọi này nó lỗi

$age =  20;
if($age > 18){
    function move(){
        echo "Bạn được xem phim này";
    }
}

move(); // oke


?>