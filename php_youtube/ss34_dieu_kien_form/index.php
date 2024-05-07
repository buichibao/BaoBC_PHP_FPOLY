<?php
  $error ="";

  if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty($_POST["name"]) ){
     $error = "Không được để trống";
    }else {
     echo $_POST["name"];
  }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .error{
            color:red;
        }
    </style>
</head>
<body>
    <form action="index.php" method="post">
      
     Name <input type="text" name="name" > <br>
     <span class="error"><?php echo $error ?></span> <br>
     <input type="submit" value="Submit">

    </form>
</body>
</html>