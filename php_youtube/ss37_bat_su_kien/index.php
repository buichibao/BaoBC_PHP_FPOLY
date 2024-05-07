<?php

if(isset($_POST["btn"])){
    echo "Khi nút submit được click thì biến "."\$_POST[btn]". "tồn tại";
}

?>

<form action="index.php" method="post">
    <input type="text" name="name">
    <input type="submit" value="Gửi" name="btn">
</form>