<?php
include "connect.php";

if($_GET['this_id']){
    $id = $_GET['this_id'];
  
}
$sql = "SELECT * FROM iphone WHERE id = $id"; 



$result = mysqli_query($connect,$sql);

$product = mysqli_fetch_assoc($result);

$sql ="DELETE FROM iphone WHERE id = $id";
mysqli_query($connect,$sql);

echo "Bạn đã xoá thành công ".$product['name'];

header("location:product.php");

?>
