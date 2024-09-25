<?php
    require '../pdo.php';
    $productname = $_POST['productname'];
    $price = $_POST['price'];
    $image = $_POST['image_test'];
    $description = $_POST['description'];
    $categoryid = $_POST['categoryid'];
  
    $isFound = "SELECT * FROM  WHERE product_name = '$productname'";
    if(!empty(pdo_query($isFound))){
        echo json_encode(false);
        return;
    }
    $sql = "INSERT INTO product (product_name,price,image,description,category_id) values ('$productname','$price','$image','$description','$categoryid')";
    pdo_execute($sql);
    header('Content-Type: application/json');
    echo json_encode(true);
?>