<?php
    require '../pdo.php';
    $category_name = $_POST['category_name'];

    $isFound = "SELECT * FROM category WHERE category_name = '$category_name'";
    if(!empty(pdo_query($isFound))){
        echo json_encode(false);
        return;
    }
    $sql = "INSERT INTO category (category_name) value ('$category_name')";
    pdo_execute($sql);
    header('Content-Type: application/json');
    echo json_encode(true);
?>