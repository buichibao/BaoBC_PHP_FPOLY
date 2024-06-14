<?php 


function total_amount(){
    $sum = 0;
    foreach ($_SESSION['mycart'] as $product) {
        $sum += $product[3] * $product[2];
    }
    return $sum;
}

function insert_bill($username,$email,$address,$phonenumber,$bill_pttt,$dateoder,$totalamount,$userid){
    $sql ="INSERT INTO bill(bill_username,bill_email,bill_address,bill_phonenumber,bill_pttt,dateoder,totalamount,user_id
    ) values ('$username','$email','$address','$phonenumber','$bill_pttt','$dateoder','$totalamount','$userid')";
    return pdo_execute_return_lastInsertID($sql);
}

function insert_cart($user_id,$product_id,$productname,$price,$quantity,$bill_id){
    $sql ="INSERT INTO cart(user_id,product_id,productname,price,quantity,bill_id) values ('$user_id','$product_id','$productname','$price','$quantity','$bill_id')";
    return pdo_execute($sql);
}

function get_all_bill(){
    $sql = "SELECT * FROM bill ";
    return pdo_query($sql);
}

function get_bill_by_id($id){
    $sql = "SELECT * FROM bill WHERE id = '$id'";
    return pdo_query_one($sql);
}

function get_bill_in_cart_by_id($id){
    $sql = "SELECT * FROM cart WHERE bill_id = '$id'";
    return pdo_query($sql);
}

function loadall_bill($userid){
    $sql = "SELECT * FROM bill WHERE user_id = '$userid'";
    $listbill = pdo_query($sql);
    return $listbill;
}

function count_product_in_bill($bill_id){
    $sql = "SELECT * FROM cart where bill_id = '$bill_id'";
    return pdo_query($sql);
}

function get_bill_status($n){
    
      switch ($n){
        case '0':
            $status ="Đơn Hàng Mới";
            break;
        case '1':
            $status ="Đang xử lý";
            break;
        case '2':
            $status ="Đang giao hàng";
            break;
        case '3':
            $status ="Hoàn tất";
            break;
        default:
            $status ="Đơn Hàng Mới";
      }
      return $status;
}
?>