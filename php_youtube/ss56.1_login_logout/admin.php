<?php

session_start();

if(!isset($_SESSION['email'])){
 header("Location: login.php");
}

?>

<h1>Đây là trang admin</h1>
<a href="logout.php"><button>Logout</button></a>