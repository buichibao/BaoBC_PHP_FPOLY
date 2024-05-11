<?php
  //hàm không tham số và không có giá trị trả về
  function sum1(){
    $a = 10 ;
    $b = 20 ;
    echo $a + $b;
  }
  sum1();

  //hàm có tham số và không có giá trị trả về
  function sum2($number1 , $number2){
   echo $number1+$number2;
  }
  sum2(3,4);

  //hàm không tham số và  có giá trị trả về
 function sum3(){
    $number1 = 10;
    $number2 = 20;
    return $number1 + $number2;
  };
  $reusult = sum3();
  echo $reusult;

  // Hàm có tham số đầy đủ và trả về giá trị

  function sum4($number1 , $number2){
     return $number1 + $number2;
  }
  $reusult = sum4(22,17);
  echo $reusult;


  //Optional Paramenter -Tham số tuỳ chọn 
  //(nếu có 1 tham số mặc định có giá trị thì khi gọi ta chỉ cần truyền giá trị cho các tham số con lại , 
  //còn nếu truyền cho tham số đó giá trị thì nó vẫn nhận giá trị mới)
  function sum5($number1 , $number2 = 3){
    return $number1 - $number2;
  }
  $reusult = sum5(10);
  echo $reusult;
  $reusult = sum5(300,200);
  echo $reusult;


 // Named Agurment - Đặt tên cho đối số ( có thể gọi và truyền các biến không theo thứ tự)
   function sum6($a,$b = 10,$c,$d){
     return $a + $b + $c -$d;
   }
   $reusult = sum6(a:2,d:10,c:2,b:10);
   echo $reusult;


   function maytinh($number1 ,$operator, $number2){
    $reusult = null;
    switch($operator){
       case "+": $reusult = $number1 + $number2;break;
       case "-": $reusult = ($number1 > $number2)?($number1 - $number2):($number2-$number1);break;
       case "*": $reusult = $number1 * $number2;break;
       case "/": $reusult = $number1 / $number2;break;
    }
    return $reusult;
   }

   $result = maytinh(number2:10,number1:40,operator:'/');
   echo $result;


 // Tham số bất định - Variadic Parameter
 // func_num_args() : trả về số lượng đối số nhận vào
 // func_get_args() : trả về 1 mảng chứa tất cả đối số đó
 // func_get_arg()  : trả về giá trị của đối số hiện tại

 function sum7(...$array){
     echo "Số lượng tham số truyền vào là : ". func_num_args()."\n";

     foreach(func_get_args() as $value){
      echo $value."-";
     }
     echo "\n";
      

     for($i = 0 ; $i < func_num_args(); $i ++){
      echo func_get_arg($i)."-";
     }

     echo "\n";


 }
 sum7(1,2,3,4,5,6);

 
 function sum8(){
  $sum = 0;
   for($i = 0 ; $i < func_num_args(); $i ++){
     $sum += func_get_arg($i);
   }
   return $sum;
 }

 echo sum8(3,4,5);


?>