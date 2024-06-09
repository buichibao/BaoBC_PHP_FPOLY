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

?>