<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if($_POST["name"] == "Ronaldo"){
        echo "Ronaldo cầu thủ hay nhất thế giới";
    }elseif($_POST["name"] == "php"){
        echo "Ngôn ngữ lập trình PHP";
    }else{
        echo "Không có dữ liệu bạn cần tìm";
    }
}

?>


<form action ="index.php" method="post">

<input type="text" name="name" placeholder="Nhập tên cần tìm"/>
<input type="submit" value="Tìm kiếm">

</form>