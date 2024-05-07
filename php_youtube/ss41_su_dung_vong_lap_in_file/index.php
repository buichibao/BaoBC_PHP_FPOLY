<?php

$myFile = fopen("file.txt","r") or die ("Lỗi");

while(!feof($myFile)){
    echo fgets($myFile). "<br>";
}

fclose($myFile);


?>