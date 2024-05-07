<?php
include("connect.php");
session_start();
$username = $_SESSION['mysession'];
    $user_id_session = mysqli_query($connect,"SELECT id FROM users where username = '$username'");
    while($row = mysqli_fetch_assoc($user_id_session)){
       $user_id = $row['id'];
    }
if(isset($_GET['id'])){
   $product_id_delete = $_GET['id'];
   mysqli_query($connect,"UPDATE cart set is_delete = 0 where product_id =  $product_id_delete and user_id = $user_id");
   header("location:cart.php");
}    

?>