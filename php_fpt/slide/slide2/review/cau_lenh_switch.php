<?php

$month = 5;

switch($month){
    case 1:
        echo "Tháng 1";
        break;
    case 2:
        echo "Tháng 2";
        break;
    case 3:
        echo "Tháng 3";
        break;
    case 4:
    case 5:
    case 6:
        echo "Tháng 4 tháng 5 và tháng 6";
        break;
    default:
        echo "Không có kết quả nào đúng";    
}

?>