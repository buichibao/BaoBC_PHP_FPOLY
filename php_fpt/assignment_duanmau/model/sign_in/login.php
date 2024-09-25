<?php
require '../pdo.php';
header('Content-Type: application/json');
$username = $_POST['username'];
$password = $_POST['password'];
$sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
$account = pdo_query_one($sql);


if (!empty($account)) {
    $_SESSION['user'] = $account;
    echo json_encode($_SESSION['user']);
    return;
}
echo json_encode(false);
