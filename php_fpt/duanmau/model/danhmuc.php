<?php

function insert_danhmuc($categoryname){
    $sql = "INSERT INTO category (category_name) values ('$categoryname')";
    pdo_execute($sql);
}

function select_danhmuc(){
    $sql = "SELECT * FROM category order by id desc";
    return pdo_query($sql);
}

function delete_danhmuc($id){
    $sql = "DELETE FROM category WHERE id = $id";
    pdo_execute($sql);
}

function select_danhmuc_by_id($id){
    $sql = "SELECT * FROM category WHERE id = $id";
    return pdo_query_one($sql);
}

function update_danhmuc($id,$categoryname){
    $sql = "UPDATE category SET category_name = '$categoryname' WHERE id = '$id'";
    pdo_execute($sql);
}

?>