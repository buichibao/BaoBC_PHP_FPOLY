<?php

function create_account($email,$username,$password){
    $sql = "INSERT INTO user (email,username,password) values ('$email','$username','$password')";
    pdo_execute($sql);
}

function get_infor_user($username,$password){
    $sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
    $us = pdo_query_one($sql);
    return $us;
}

function get_infor_email($email){
    $sql = "SELECT * FROM user WHERE email = '$email' ";
    $us = pdo_query_one($sql);
    return $us;
}

function update_account($id,$username,$password,$email,$phonenumber,$address,$role){
    if(($role=="")){
        $sql = "UPDATE user SET  username = '$username' , password = '$password' ,email = '$email',phone_number = '$phonenumber',address = '$address' WHERE id = '$id'";
    }else {
        $sql = "UPDATE user SET  username = '$username' , password = '$password' ,email = '$email',phone_number = '$phonenumber',address = '$address',role ='$role' WHERE id = '$id'";
    }

    return pdo_execute($sql);
}

function select_account(){
    $sql = "SELECT * FROM user";
    return pdo_query($sql);
}

function select_account_by_id($id){
    $sql = "SELECT * FROM user WHERE id ='$id'";
    return pdo_query_one($sql);
}


?>