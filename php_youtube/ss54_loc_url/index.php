<?php

$url = "https://www.tiktok.com/messages?lang=vi-VN";

$locURL = filter_var($url,FILTER_SANITIZE_URL);
echo $locURL;
echo "\n";

if(filter_var($locURL,FILTER_VALIDATE_URL)){
    echo "URL hợp lệ";
}else {
    echo "URL không hợp lệ";
}


?>