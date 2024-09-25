<?php

function create_comment($content,$commentdate,$productid,$userid){
    $sql = "INSERT INTO comments (content,commentdate,product_id,user_id) values ('$content','$commentdate','$productid','$userid')";
    pdo_execute($sql);
}

function get_all_comment_by_id_product($productid){
    $sql = "SELECT comments.id AS id_c, comments.content AS comment_content, comments.commentdate, product.id AS product_id, product_name,user.id AS user_id, username FROM comments JOIN  product ON product.id = comments.product_id JOIN  user ON user.id = comments.user_id WHERE product_id = '$productid' ORDER BY comments.id;";
    return pdo_query($sql);
}

function get_all_comment(){
    $sql = "SELECT comments.id AS id_c, comments.content AS comment_content, comments.commentdate, product.id AS product_id, product_name,user.id AS user_id, username FROM comments JOIN  product ON product.id = comments.product_id JOIN  user ON user.id = comments.user_id ORDER BY comments.id;";
    return pdo_query($sql);
}

function delete_comment_by_id($id){
    $sql ="DELETE FROM comments WHERE id = '$id'";
    pdo_execute($sql);
}

function search_comment_by_productname($productname){
    $sql = "SELECT comments.id AS id_c, comments.content AS comment_content, comments.commentdate, product.id AS product_id, product_name,user.id AS user_id, username FROM comments JOIN  product ON product.id = comments.product_id JOIN  user ON user.id = comments.user_id WHERE product_name like '%$productname%' ORDER BY comments.id";
    return pdo_query($sql);
}

?>

