<?php
   
   $student1 = array("Nguyễn Văn A","0987654321");
   $student2 = array("Nguyễn Văn B","0000000000");
   $student3 = array("Nguyễn Văn C","0987654321");
   $student4 = array("Nguyễn Văn D","0987654321");
   $student5 = array("Nguyễn Văn E","0987654321");
 
   
   $students = array($student1,$student2,$student3,$student4,$student5);

   echo $students[1][0]."-".$students[1][1];


?>