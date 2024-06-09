<?php

function insert_sanpham($productname,$price,$image,$description,$categoryid){
    $sql = "INSERT INTO product (product_name,price,image,description,category_id) values ('$productname','$price','$image','$description','$categoryid')";
    pdo_execute($sql);
}

function select_sanpham_home(){
    $sql = "SELECT * FROM product where 1 order by id desc limit 0,9";
    return pdo_query($sql);
}

function select_sanpham_top10(){
    $sql = "SELECT * FROM product where 1 order by view desc limit 0,10";
    return pdo_query($sql);
}

function select_sanpham($categoryid){
    $sql = "SELECT * FROM product where 1";
    if($categoryid > 0){
        $sql .= " and category_id = '$categoryid'";
    }
    $sql .= " order by id desc";
    return pdo_query($sql);
}

function delete_sanpham($id){
    $sql = "DELETE FROM product WHERE id = $id";
    pdo_execute($sql);
}

function select_sanpham_by_id($id){
    $sql = "SELECT * FROM product WHERE id = $id";
    return pdo_query_one($sql);
}

function select_san_pham_cung_loai($id){
    $sql = "SELECT * FROM product WHERE category_id = (SELECT category_id FROM product WHERE id = '$id') and id <> '$id'";
    return pdo_query($sql);
}


function update_sanpham($id,$productname,$price,$image,$description,$categoryid){
    if($image!=""){
            $sql = "UPDATE product SET product_name = '$productname',price = '$price' ,
            image = '$image', description = '$description', category_id = '$categoryid'
            WHERE id = '$id'";
    }else {
          $sql = "UPDATE product SET product_name = '$productname',price = '$price' ,
          description = '$description', category_id = '$categoryid'
          WHERE id = '$id'"; 
    }
    
    pdo_execute($sql);
}


function get_categoryname($categoryid){
    $sql = "SELECT * FROM category WHERE id = '$categoryid'";
    $danhmuc = pdo_query_one($sql);
    extract($danhmuc);
    return $category_name;
}

?>