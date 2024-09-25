<?php

function create_account($email,$username,$password,$address,$phonenumber,$role){
    $sql = "INSERT INTO user (email,username,password,address,phone_number,role) values ('$email','$username','$password','$address','$phonenumber','$role')";
    pdo_execute($sql);
}

function get_infor_user($username,$password){
    $sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
    $account = pdo_query_one($sql);
    return $account;
}

function get_infor_email($email){
    $sql = "SELECT * FROM user WHERE email = '$email' ";
    return pdo_query_one($sql);
}



function update_account($id,$username,$password,$email,$phonenumber,$address,$role){
    if(($role=="")){
        $sql = "UPDATE user SET  username = '$username' , password = '$password' ,email = '$email',phone_number = '$phonenumber',address = '$address' WHERE id = '$id'";
    }else {
        $sql = "UPDATE user SET  username = '$username' , password = '$password' ,email = '$email',phone_number = '$phonenumber',address = '$address',role ='$role' WHERE id = '$id'";
    }

    return pdo_execute($sql);
}

function gel_all_account(){
    $sql = "SELECT * FROM user";
    return pdo_query($sql);
}

function get_account_by_id($id){
    $sql = "SELECT * FROM user WHERE id ='$id'";
    return pdo_query_one($sql);
}


?>