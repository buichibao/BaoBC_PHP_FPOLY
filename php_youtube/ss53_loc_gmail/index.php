
<?php

$gmail = 'buichibao2202@gmail.com';

$checkgmail = filter_var($gmail,FILTER_SANITIZE_EMAIL); // lọc các kí tự đặc biệt ra
echo $checkgmail;

if(!filter_var($checkgmail,FILTER_VALIDATE_EMAIL) == false){
    echo "email hợp lệ";
}else {
    echo "eamil không hợp lệ";
}


?>