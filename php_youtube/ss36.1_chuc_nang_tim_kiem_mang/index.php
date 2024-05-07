<?php

$listProduct = [
    "laptop"=>array("price"=>1000,"color"=>"black"),
    "iphone15"=>array("price"=>2000,"color"=>"red"),
    "tv"=>array("price"=>500,"color"=>"white"),

];
$productName = null;
$check = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $productName = $_POST["productName"];

    foreach( $listProduct as $key=>$value){
        if($productName == $key){
            echo "$key : ";
            foreach($value as $value){
                 echo "$value - ";
            }
            $check = true;
            break;
        }
    }

    if(!$check){
        echo "Không tìm thấy $productName";
    }
}

?>


<form action="index.php" method="post">

<input type="text" name="productName" placeholder="Enter product name">
<input type="submit" value="Search">

</form>