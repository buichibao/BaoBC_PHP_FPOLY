<?php

$server = "localhost";
$user   ="root";
$password = "baobc";
$database = "webbanhang";

$connect = new mysqli($server,$user,$password,$database);

$stmt = $connect->prepare("SELECT id , productname FROM products");
$stmt->execute();
$stmt->bind_result($id,$productname);

while($stmt->fetch()){
   echo "$id - $productname";
}


?>