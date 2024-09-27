<?php

include 'model.php';

if (isset($_POST['email'])) {
   $email = $_POST['email'];
   $listAllStudent = findStudentByEmail($email);
} else {
   $listAllStudent = getAllStudent();
}

if (isset($_GET['chucnang'])) {
   $_GET['chucnang'] = 'delete';
   $id = $_GET['id'];
   deleteStudent($id);
   header("Location:index.php");
}

include 'view.php';
