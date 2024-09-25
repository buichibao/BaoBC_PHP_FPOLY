<?php 


function total_amount(){
    $sum = 0;
    foreach ($_SESSION['mycart'] as $product) {
        $sum += $product[3] * $product[2];
    }
    return $sum;
}

function insert_bill($username,$email,$address,$phonenumber,$bill_pttt,$dateoder,$totalamount){
    $sql ="INSERT INTO bill(bill_username,bill_email,bill_address,bill_phonenumber,bill_pttt,dateoder,totalamount) values ('$username','$email','$address','$phonenumber','$bill_pttt','$dateoder','$totalamount')";
    return pdo_execute_return_lastInsertID($sql);
}

function insert_cart($user_id,$product_id,$productname,$price,$quantity,$bill_id){
    $sql ="INSERT INTO cart(user_id,product_id,productname,price,quantity,bill_id) values ('$user_id','$product_id','$productname','$price','$quantity','$bill_id')";
    return pdo_execute($sql);
}

function get_bill_by_id($id){
    $sql = "SELECT * FROM bill WHERE id = '$id'";
    return pdo_query_one($sql);
}

function get_bill_in_cart_by_id($id){
    $sql = "SELECT * FROM cart WHERE bill_id = '$id'";
    return pdo_query($sql);
}

?>