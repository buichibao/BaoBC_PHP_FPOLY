<?php

$ip = "127.0.0.1";

if(!filter_var($ip,FILTER_VALIDATE_IP) == FALSE){
    echo "ip hợp lệ";
}else {
    echo "ip không hợp lệ";
}


?>