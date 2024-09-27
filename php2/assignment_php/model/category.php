<?php

function add_category($categoryname){
    $sql = "INSERT INTO category (category_name) values ('$categoryname')";
    pdo_execute($sql);
}

function get_all_category(){
    $sql = "SELECT * FROM category order by id desc";
    return pdo_query($sql);
}

function delete_category($id){
    $sql = "DELETE FROM category WHERE id = $id";
    pdo_execute($sql);
}

function get_category_by_id($id){
    $sql = "SELECT * FROM category WHERE id = $id";
    return pdo_query_one($sql);
}

function update_category($id,$categoryname){
    $sql = "UPDATE category SET category_name = '$categoryname' WHERE id = '$id'";
    pdo_execute($sql);
}

/*Thống kê */
function  statistical_results(){
    $sql = "SELECT category.id as category_id, category_name,count(product.id) as count_product,min(product.price) as min_price, max(product.price) as max_price,avg(product.price) as avg_price";
    $sql .=" from product join category on category.id = product.category_id";
    $sql .= " group by category_id order by category.id desc";
    return pdo_query($sql);
}
?>