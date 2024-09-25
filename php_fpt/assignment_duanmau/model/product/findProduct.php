<?php
    require '../pdo.php';
    header('Content-Type: application/json');
     function findProduct($product_name) {
        $sql = "SELECT * FROM product WHERE product_name like '%$product_name%'";
        return pdo_query($sql);
    }
    $data = findProduct($_POST['productname']);
    echo json_encode($data);

?>