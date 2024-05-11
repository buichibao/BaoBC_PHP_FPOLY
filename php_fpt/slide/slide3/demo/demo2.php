<?php
//Hàm bình thường
function sum($a , $b){
    return $a+$b;
}

echo sum(4,5)."\n";

function sum1($a , $b = 5){
    return $a+$b;
}

echo sum1(2);

function sum2($a , $b  , $c){
    return $a+$b-$c;
}

echo sum2(a:4,c:10,b:2);

//hàm ẩn danh (amonyus function) :(hàm không có tên) 
$sum = function($a , $b){
    return $a + $b;
};  // phải có dấu ; vì đây là 1 câu lệnh gán giá trị cho biến
echo $sum(5,4); //gọi hàm thông qua tên biến mà được gán cho hàm  vẫn truyền tham số bình thường

//callback function 1
function myFunction($callback){
   $callback();
};

myFunction(function() {
    echo "Hello";
});

//callback function 2

$array = [1,2,3,4,5,6];
$arrNew = array_map(function ($value) {  //hàm array_map dùng để lọc tất cả các phần tử của mảng
      return $value * 2;  
},$array);

print_r($arrNew);

//callback function 3

$array = [1,2,3,4,5,6];
function double($value){
    return $value * 2;
};
$newArray = array_map('double',$array);

foreach($newArray as $value){
    echo "$value \t";
}

////callback function 4

function testCallback($a , $b , $callback){
      return $callback($a,$b);
};

$sumCallBack = testCallback(3,5,function($a ,$b){
    return $a + $b;
});

echo $sumCallBack;


//callback function 5 : sử dụng closure

$count = 5;

function closureCallBack($callback){
     return $callback();
}

$counter = closureCallBack(function() use ($count) {
       return $count++;
} );

echo "$count - $counter \n";

$counter = closureCallBack(function() use (&$count) {   // sử dụng thêm & để có thể thay đổi giá trị của biến
    return ++$count; // nếu count++ : 6 - 5 vì gán trước mới tăng nên biến (counter : 5)
} );

echo "$count - $counter";


// Bài toán nối thêm chuỗi vào các phần tử cho trước
$array = ["Nguyen Van A","Nguyen Van B"];
print_r($array);
//cách xử lý bình thường
for($i = 0 ; $i < count($array); $i++){
   $array[$i] ="Hello ".$array[$i];
}
print_r($array);
//cách xử lý bình thường
foreach($array as $key=>$value){
    $array[$key] = $array[$key]." nha";
}
print_r($array);
//Sử dụng array_map() : vẫn không là thay đổi mảng gốc
$newArray = array_map(function($value){
      return "Xin chào ".$value;
},$array);

print_r($array);
print_r($newArray);

//Closure : thường xử lý với hàm ẩn danh ( amonyus function)
//hàm ẩn danh bình thường xử lý khi không có closure
$sum3 = function($a, $b ,$c){
    return $a + $b +$c;
};

echo $sum3(1,2,3);

// Xử lý hàm ẩn danh với closure
$a = 10; 
$b = 20;

$sum4 = function($c, $d) use ($a,$b){
   return $a+$b+$c-$d;
};

echo $sum4(10, 20);

//Arrow function : hỗ trợ "user" sử dụng biến ngoài hàm ( cũng là hàm ẩn danh)
$number1 = 10; 
$number2 = 20;
$sum5 = fn ($number3,$number4) => $number1 + $number2 + $number3 + $number4;
echo $sum5( number4 : 30, number3 : 60);

//Arrow function
$greating ="Hello ";

$string = fn($name) => $greating. $name;

echo $string("Bao");


//Từ khoá yeild : generator ( 1 hàm có trển trả về nhiều giá trị 1 lần sau đó có thể dung foreach để duyệt);
function morevalue(){
    yield 1;
    yield from [1,2,3];  // phải có từ khoá from mới trả về được mảng
    yield 3;
    yield 14;
    yield 51;
}

$arrYeild = morevalue(); //trả về 1 đối tượng chưa các giá trị

foreach($arrYeild as $value){
    echo $value."\t";
}

//NULLABLE
function hello(?string $name){
    echo "Hello ".$name;
}
hello(2);
hello("bảo");
hello(null); // chạy đầu tiên
hello(); // lỗi


// UNION : định nghĩa kiểu dữ liệu a | b | c
//Đối với tham số

function sumUnion(float|int $number1, int $number2){
   return $number1 + $number2;
}
echo sumUnion(1.23,3.1); // truyền vào tham số thứ 2 là số thực nó không lỗi nhưng nó tự ép về số nguyên

//Đối với giá trị trả về

function sumUnion2(float|int $number1, int $number2):int | string{ 
    return $number1 + $number2;
 }
 echo sumUnion2(1.23,3.1);
?>