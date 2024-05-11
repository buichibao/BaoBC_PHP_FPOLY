<?php
//hàm không tham số và không có giá trị trả về
function sum1(){
    $number1 = 5;
    $number2 = 5;
    echo "$number1 + $number2 = ". ($number1 + $number2)."\n";
}
sum1();

//hàm có tham số và không có giá trị trả về
function sum2($number1, $number2){

    echo "$number1 + $number2 = ". ($number1 + $number2)."\n";
}
sum2(3,4);

//hàm không tham số và  có giá trị trả về
function sum3(){
    $number1 = 5;
    $number2 = 5;
    return $number1 + $number2;
}
echo sum3()."\n";

// Hàm có tham số đầy đủ và trả về giá trị
function sum4($number1, $number2){
    return $number1 + $number2;
}
echo sum4(4,5)."\n";

//Optional Paramenter -Tham số tuỳ chọn 
//(nếu có 1 tham số mặc định có giá trị thì khi gọi ta chỉ cần truyền giá trị cho các tham số con lại , 
//còn nếu truyền cho tham số đó giá trị thì nó vẫn nhận giá trị mới)
function sum5($number1 , $number2 = 50){
    return $number1 - $number2;
}
echo sum5(4,5)."\n";
echo sum5(100)."\n";


// Named Agurment - Đặt tên cho đối số ( có thể gọi và truyền các biến không theo thứ tự)
function maytinh1($number1, $number2, $pheptinh) {
    $result = null;
    switch($pheptinh) {
        case "+" : $result = $number1 + $number2; break;
        case "-"  : $result = ($number1 > $number2) ? $number1 - $number2 : $number2 - $number1; break;
        case "*" : $result = $number1 * $number2; break;
        case "/" : $result = $number1 / $number2; break;
    }
    return $result;
}
echo maytinh1(5, "+", 10) . "\n";  // null
echo maytinh1(number1: 5, pheptinh: "-", number2: 10) . "\n"; // Named Agurment

// Tham số bất định - Variadic Parameter
function sum6(...$arr){
     // Lấy ra số lượng của tham số
     echo "Số lượng tham số: " . func_num_args() . "\n";
      // Lấy ra mảng chứa tất cả các giá trị của đối số
    foreach(func_get_args() as $arg) {
        echo $arg . "\t";
    }
    echo "\n";
    // Lấy ra giá trị của các tham số
    for($i = 0; $i < func_num_args(); $i++) {
        echo func_get_arg($i) . "\t";
    }

}
sum6(1,2,3,4,5);

function sum7(...$arr){
    $sum = 0;
   for($i = 0; $i < func_num_args(); $i++) {
     $sum += func_get_arg($i);
   }
   return $sum;

}
echo "Tổng: " . sum7(3,2,3,5,6) . "\n";
   

?>