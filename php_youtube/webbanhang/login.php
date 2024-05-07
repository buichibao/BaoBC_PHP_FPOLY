
<?php
   
   include 'connect.php';
   if(isset($_POST['btn'])){
      $userName = $_POST['username'];
      $password = $_POST['password'];

     
      $sql = "SELECT * FROM user WHERE username ='$userName' and password ='$password'";
      $result = mysqli_query($connect,$sql);

      
      
      if(mysqli_num_rows($result) == 1){
        header('location:product.php');
      }else{
        echo "Tài khoản mật khẩu không chính xác";
      }

   }

 


?>







<form action="" method="post">
    <label for="user">UserName</label>
    <input type="text" name="username" id="user">
     <br>
    <label for="password">Password </label>
    <input type="password" name="password" id="password">
    <br>
    <input type="submit" name="btn">
</form>