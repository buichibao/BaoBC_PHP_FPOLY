<?php
$x = 10;
//Khai báo
function change(){
   $x = 20;
   echo "x trong function là : ".$x."\n";
   //Gọi x bên ngoài vào bên trong hàm 
   $x = $GLOBALS['x'];
   echo "x trong function 'GLOBALS' là : ".$x."\n";
}
//Gọi hàm
change();
echo "x ngoài function là : ".$x;

?>