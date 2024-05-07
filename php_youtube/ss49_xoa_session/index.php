<?php

session_start();


$_SESSION["bao"]= "bao";
echo $_SESSION["bao"];

unset ($_SESSION["bao"]);  // xoá session có tên là bao

session_destroy();  // xoá tất xả session có trên máy tính


?>