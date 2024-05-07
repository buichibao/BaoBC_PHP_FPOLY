<?php

session_start();
if(isset($_SESSION['mysession'])){
    echo "xoá session";
    unset($_SESSION['mysession']);
    header("location:login.php");
}

?>