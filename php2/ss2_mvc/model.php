<?php
   $servername ='localhost';
   $username ='root';
   $password ='baobc';
   $databasename ='mvc_student';

   $connect = mysqli_connect($servername,$username,$password,$databasename);

   function getAllStudent(){
    global $connect;
    $sql = "SELECT * FROM student";
    $data = mysqli_query($connect,$sql);
    return $data;
   }

   function addStudent($name,$class_name){
    global $connect;
    $sql = "INSERT INTO student (name,class_name) values ('$name','$class_name')";
    mysqli_query($connect,$sql);
   }

   function deleteStudent($id){
      global $connect;
      $sql = "DELETE FROM student WHERE id ='$id'";
      mysqli_query($connect,$sql);
   }


?>