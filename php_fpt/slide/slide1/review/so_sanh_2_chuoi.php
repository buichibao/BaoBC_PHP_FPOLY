<?php

$string1 = "Hello";
$string2 = "hello";

if($string1 === $string2){  //Phân biệt chữ hoa và chữ thường
    echo "2 chuỗi bằng nhau";
}else{
    echo "2 chuỗi không bằng nhau";
}


if(strcmp($string1,$string2)){ //Không phân biệt chữ hoa chữ thường
    echo "2 chuỗi bằng nhau";
}else{
    echo "2 chuỗi không bằng nhau";
}


if("Anh" < "Bao"){ //so sanh chứ cái chữ nào đứng sau thì lớn hơn
    echo "a đứng trước b";
}else {
   echo  "b đứng trước a";
}





?>