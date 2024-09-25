<?php

/** 
 * Các kiểu dữ liệu trong PHP
 * KIỂU NGUYÊN THUỶ
 * 1.số nguyên (int)
 * 2.số thực (float)
 * 3.chuỗi (string)
 * 4.boolean (boolean)
 * 
 * KIỂU ĐỐI TƯỢNG
 * 5.mảng (array)
 * 6.đối tượng (object)
 * 
 * KIỂU NULL
 * 7.null
 * 
 * */

//Ép kiểu :là quá trình chuyển đổi từ kiểu dữ liệu này sang kiểu dữ liệu khác , giúp dữ liệu linh hoạt hơn

//Có 2 cách để ép kiểu trong PHP
//C1 : sử dụng toán tử ép kiểu : int , float , string , boolean
$value = "123";
echo (int)$value;     //123
echo (float)$value;   //123
echo (string)$value;  //"123"
echo (bool)$value; //1

//Cách 2 :Sử dụng hàm : intval(), floatval() , strval() , boolval()
$value = "abc";
echo intval($value);     //0
echo floatval($value);   //0
echo strval($value);    //"abc
echo boolval($value);  //1

//Quy tắt ép kiểu boolean sang 1 kiểu khác
$value = true;
echo (int)$value;    //1
echo (float)$value;  //1
echo (string)$value; //"1"

$value = false;
echo (int)$value;    //0
echo (float)$value;  //0
echo (string)$value; //""

//Quy tắt ép kiểu string sang 1 kiểu khác
$value = "0";
echo intval($value);   //0
echo floatval($value); //0
echo boolval($value);  // false => ""

$value = "";
echo intval($value); //0
echo floatval($value); //0
echo boolval($value); //false =>""

$value = "false";
echo (int)$value;    //0
echo (float)$value;  //0
echo (bool)$value; //true => 1

$value = "01234";
echo intval($value); //1234
echo floatval($value); //1234
echo boolval($value); //true => 1

$value = "0123.4"; // 
echo intval($value); //123
echo floatval($value); //123.4 nếu là dấu khác(.) thì vẫn = 123
echo boolval($value); //true => 1

$value ="abc";
echo intval($value); //0
echo floatval($value); //0
echo boolval($value); //true => 1

$value ="12bc45";
echo intval($value); //12
echo floatval($value); //12
echo boolval($value); //true => 1

$value ="abc344asd";
echo intval($value); //0
echo floatval($value); //0
echo boolval($value); //true => 1



if (true == 1) {
    echo "true == 1";
}

if (true == 123) {
    echo "true == 123";
}

if(false == "0"){
    echo "false == 0";
}

if(false == ""){
    echo "false == 0";
}

if(false == 0){
    echo "false == 0";
}
