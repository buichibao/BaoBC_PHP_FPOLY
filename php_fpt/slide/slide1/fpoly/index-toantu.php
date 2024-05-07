<?php
// toán tử toán học
$cong = 5 + 5;
$tru = 10 - 5;
$nhan = 2 * 3;
$luythua = 3 ** 3; // 3 mũ 3 = 3 * 3 * 3 
$chiaLayThuong = 4 / 2;
$chiaLayDu = 5 / 2;
// toán tử kết hợp với gán
$x1 += 2; // $x1 = $x1 + 2
$x2 -= 4; // $x2 = $x2 - 4
$x3 *= 5; // $x3 = $x3 * 5
$x4 /= 2; // $x4 = $x4 / 2
$x5 %= 3; // $x5 = $x5 % 3
$x6 **= 2; // $x6 = $x6 ** 2
// Toán tử tăng, giảm
$y1 = 10;
$y2 = 10;
$rs1 = ++$y1; // $rs1 = 11;
$rs2 = $y2++; // $rs2 = 10; $y2 = 11;
// echo $rs2;
// echo $y2;
// toán tử so sánh
echo '10' == 10; // true, so sánh tương đối, bằng nhau giữa 2 giá trị
echo '10' != 10; // false
echo 10 === 10; // true
// so sánh tuyệt đối, bằng nhau giữa 2 giá trị và cùng kiểu dữ liêu
echo 10 !== 10; // false
?>