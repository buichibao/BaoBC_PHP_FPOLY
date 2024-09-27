<?php
  require "config.php";
  
  function getAllStudent(){
     global $connect;
     $sql = "SELECT * FROM student WHERE status = 0";
     $result = mysqli_query($connect,$sql);
     return $result;
  }
  
  function findStudentByEmail($email){
    global $connect;
    $sql ="SELECT * FROM student WHERE status = 0 and email like '%$email%'";
    $result = mysqli_query($connect,$sql);
    return $result;
  }

  function deleteStudent($id){
    global $connect;
    $sql = "UPDATE student set status =1 WHERE id ='$id'";
    mysqli_query($connect,$sql);
 }
?>