<?php


$server = "localhost";
$user   ="root";
$password = "baobc";
$database = "webbanhang";

$connect = new mysqli($server , $user , $password , $database);

$stmt = $connect->prepare("SELECT id , productname FROM products WHERE id = ? and productname = ?");

$id = 1;
$productname = "Bánh mỳ";
$stmt->bind_param("is",$id,$productname);
$stmt->execute();
$stmt->bind_result($id,$productname);

while($stmt->fetch()){
    echo "ID : $id - Productname : $productname";
}




?>