<?php 
$servername  = 'localhost';
$username = 'root';
$password ='baobc';
$database ='mvc_student';
$connect = mysqli_connect($servername,$username,$password,$database);

function getAllStudent() {
    global $connect;
    $data = mysqli_query($connect,"SELECT * FROM student where id");
    return $data;
}


?>