<?php
session_start();
$cart = [];
$cart[] = [1,"Điện thoại",1000000];
$cart[] = [2,"Đồng hồ",1000000];
$_SESSION['cart'] = $cart;

echo '<a href="sudungsession.php">Show session</a>';
?>