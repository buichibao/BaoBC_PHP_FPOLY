<?php
    require '../pdo.php';

    $ID = $_POST['ID'];
    $category_name = $_POST['category_name'];
    $sql = "UPDATE category SET category_name = '$category_name' WHERE id = '$ID'";
    pdo_execute($sql);
    header('Content-Type: application/json');
    echo json_encode(true);
?>