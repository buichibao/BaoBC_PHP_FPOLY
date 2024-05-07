<?php
echo date('d-M-y H:i:s') . '<br>';
echo date('d-M-y H:i:s', time() - (60 * 60 * 48)) . '<br>';
echo time() . '<br>';
// Ép kiểu từ string sang date
$myStr = '2022-03-18 10:25:00';
$myDate = date_parse($myStr); // Năm-tháng-ngày
var_dump($myDate);
echo "Định dạng VN: " .$myDate["day"].'-'.$myDate["month"].'-'.$myDate["year"];
// Ép kiểu từ string sang date theo format
$myDateWithFormat = date_parse_from_format('Y m d H:i:s', $myStr);
// var_dump($myDateWithFormat);
// var_dump($GLOBALS);
$GLOBALS['m'] = 'male';
$GLOBALS['fm'] = 'female';
$GLOBALS['gender'] = ['male', 'female', 'orther'];
$GLOBALS['fpt'] = 'food profesional technology';
var_dump($GLOBALS['gender']);
function output() {
    echo $GLOBALS['m'] . ' - ' . $GLOBALS['fm'];
}
// output();
// Hàm isset() dùng để kiểm tra tồn tại, return boolean
if(isset($GLOBALS['o'])) {
    echo $GLOBALS['m'];
} else {
    echo 'Không tồn tại!';
}
// Hàm empty() kiểm tra giá trị của biến khi đã tồn tại, return boolean
$x = '';
if(empty($x)) {
    echo 'Không có giá trị!';
} else {
    echo $x;
}
// Hàm is_null() kiểm tra giá trị của biến có bị null hay không, return boolean
$y = null;
if(is_null($y)) {
    echo 'Không có giá trị';
} else {
    echo 'Có giá trị';
}
// if(empty($y)) {
//     echo 'Đã tồn tại';
// }
// Hàm xóa biến unset(<biến cần xóa>)
unset($y);
if(!isset($y)) {
    echo 'Đã xóa thành công';
}
// echo $y ?? 'HIHI'; // is_null($y) ? 'HIHI' : $y
// echo $z ??= 'HEHE'; // isset($z) ? $z : 'HEHE'
// $myArr = ["Nguyễn văn a", 'Lê thị b', 'TRần van c'];
// print_r($myArr);
// var_dump($myArr);
// var_export($myArr);
?> 