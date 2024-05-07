<?php

$textFile = "text.txt";

$openFile = fopen($textFile,"r") or die ("Lỗi file"); //mở file tham số "r" dùng để đọc file

//echo fread($openFile,filesize($textFile));  //đọc file 

echo fgets($openFile); // mỗi lần dùng là đọc 1 dòng

echo fgets($openFile); // sau đó đến các dòng tiếp theo
echo fgets($openFile);

fclose($openFile);

?>