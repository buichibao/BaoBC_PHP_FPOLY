<?php

$s = "Hello ";
$s[0] = 'B'; // ở đây sử dụng "" cho 1 kí tự sẽ lỗi
echo $s."\n"; // Bello
echo strlen(($s));


$string1 = "hello";
$string2 = "hello";

if ($string1 == $string2) {
    echo "Hai chuỗi giống nhau.";  //Kết quả
} else {
    echo "Hai chuỗi không giống nhau.";
}

$string1 = "Hello";
$string2 = "hello";

if (strcmp($string1, $string2) == 0) { //strcasecmp : không phân biệt
    echo "Hai chuỗi giống nhau.";
} else {
    echo "Hai chuỗi không giống nhau."; // Kết quả : vì strcmp phân biệt hoa thường
}

$string1 = "apple";
$string2 = "banana";

if ($string1 < $string2) {
    echo "Chuỗi 1 đứng trước chuỗi 2."; //Kết quả : vì chữ cái đầu tiền đứng trước (bé hơn)
} else {
    echo "Chuỗi 2 đứng trước chuỗi 1.";
}
?>