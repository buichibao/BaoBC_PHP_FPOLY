<?php 

if(isset($_POST['btn'])){
    $name = $_POST['productName'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $category = $_POST['category'];
    $img = $_FILES['productImg']['name'];
    $tmp_img = $_FILES['productImg']['tmp_name'];


    move_uploaded_file($tmp_img,"../back-end/img/".$img);
    echo "Upload thành công";
} 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form{
            padding: 20px 10px 40px 30px;
            border: 2px solid black;
            width:250px;
        }
    </style>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
    <p>Prosuct Name</p>
    <input type="text" name="productName">
    <p>Description</p>
    <input type="text" name="description">
    <p>Price</p>
    <input type="text" name="price">
    <p>Category</p>
    <select name="category" >
        <option value="laptop">Laptops</option>
        <option value="phone">Smart Phone</option>
    </select>
    <p>Room Image</p>
    <input type="file" name="productImg">
    <br><br>
    <input type="submit" value="Save" name="btn">
</form>
</body>
</html>
