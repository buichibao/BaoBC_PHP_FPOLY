<?php
    require '../pdo.php';
    header('Content-Type: application/json');
     function findCategory($category_name) {
        $sql = "SELECT * FROM category WHERE category_name like '%$category_name%'";
        return pdo_query($sql);
    }
    $data = findCategory($_POST['category_name']);
    echo json_encode($data);
?>