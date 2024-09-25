<?php 
//Kiểu nguyên thuỷ
$int = 10;
$float = 10.5;
$string ="chuỗi";
$boolean = true;

var_dump($int);
var_dump($float);
var_dump($string);
var_dump($boolean);

//Kiểu đối tượng
$array = array(1,2,3,4);

class Myclass{
    public $email;
}
$object = new Myclass();

//Kiểu null : 1 biến có thể có giá trị hoặc giá trị null
$variable; //null (không khởi tạo cũng null)
$variable = null; 

//Tham số có thể nhận vào nhiều loại giá trị khác nhau
function getArea(int $width){
    return $width*2;
}
$area = getArea(3);
echo $area;
$area = getArea(2.1);
echo $area;
?>