<?php

$foderImg = 'img/';
$img = $foderImg .basename($_FILES["hinhanh"]["name"]);

if(isset($_POST["btn"])){
   if(isset($_FILES["hinhanh"])){
     if($_FILES['hinhanh']['size'] == 0){
      echo "Bạn chưa chọn file";
   }

   //Kiểm tra file đã tồn tại hay chưa 
   elseif(file_exists($img)){
      echo "File đã tồn tại";
 
   }
   //đoạn code kiểm tra file upload lên quá dung lượng
   else if($_FILES['hinhanh']['size']  > 20000000){
      echo "File quá dung lượng";
   }
   
   else {
      echo 'Upload file thành công';
      move_uploaded_file($_FILES['hinhanh']['tmp_name'],'./img/'. $_FILES['hinhanh']['name']);
   }
  }else{
   echo "File bị lỗi";
  }
}

?>