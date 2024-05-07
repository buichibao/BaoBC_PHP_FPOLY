<?php

// $myFile = fopen("file.txt","w"); //tạo file mới

$myFile = fopen("file.txt","a"); //Viết thêm nội dung vào file vừa tạo

fwrite($myFile,"Xin chào mọi người"); // Nội dung cần viết
fwrite($myFile,"Xin chào mọi người nha"); // Nội dung cần viết

fclose($myFile); //đóng file

?>