<?php

$myFile = fopen("file.txt","w") or die ("Lỗi"); // vừa tại file mới và viết lại

fwrite($myFile,"Tôi là Loan");

fclose($myFile);


?>