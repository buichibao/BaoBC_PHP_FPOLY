<?php
 
 include 'model.php';
 
 if(isset($_POST['email'])){
    $email = $_POST['email'];
    $listAllStudent = findStudentByEmail($email);
 }else {
    $listAllStudent = getAllStudent();
 }
 
 include 'view.php';

?>