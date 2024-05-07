 <?php
   
   $nameError ="";

   if($_SERVER["REQUEST_METHOD"] == "POST"){
      if(empty($_POST["name"])){
        $nameError =" Không được để trống";
      }else{
        if(!preg_match("/^[a-zA-Z ]*$/",$_POST["name"])){   //preg_match(regex , chuỗi cần kiểm tra); kiểm tra xem 2 chuỗi có trùng khớp hay không ? trùng (true)- không trùng (false)
            $nameError =" Không được dùng kí tự đặc biệt";
        }else{
            echo  $_POST["name"];
        }
      }
   }
 
 
 ?>


<form action="../ss35_dieu_kien_form_nang_cao/index.php" method="post">
   
   Name <input type="text" name="name">
   <span style="color: red;"><?php echo $nameError  ?></span> <br>
   <input type="submit" value="Submit">
   
</form>