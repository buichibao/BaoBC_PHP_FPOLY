<?php 

  class Student {
    public $id;
    public $name;
    public $className;
    
    public function showInfor(){
        echo "Xin chào ". $this->name;
    }
  }

 
  $student1 = new Student(); 
  if(is_null($student1->id)){
    echo "null112";
  }
  

//   $student1->id = 1;
//   $student1->name = "Bảo";
//   $student1->className = "12A3";
//   $student1->showInfor();


?>