<?php
  include "model.php";
  if(isset($_GET['chucnang'])){
    switch($_GET['chucnang']){
       case 'list':
         $listAllStudent = getAllStudent();
         include "../ss2_mvc/views/list.php";
         break;
       case 'add':
         include "../ss2_mvc/views/add.php";
         break;
       case 'saveadd':
        $name = $_POST['name'];
        $class_name = $_POST['class_name'];
        addStudent($name,$class_name);
        header(("Location:index.php"));
        break;  
       case 'delete':
        $id = $_GET['id'];
        deleteStudent($id);
        header("Location:index.php");
        break;

    }
   }else {
     $listAllStudent = getAllStudent();
     include "../ss2_mvc/views/list.php";
   }
?>