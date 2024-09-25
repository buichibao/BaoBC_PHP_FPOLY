<?php
  session_start();
  include '../../model/pdo.php';
  include '../../model/comment.php';

  $productid = $_REQUEST['idproduct'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div >
    <form class="row g-3 needs-validation" action="<?=$_SERVER['PHP_SELF'];?>" method="post">
   <div class="col-md-6">
    <input type="text" class="form-control" name="productid" value="<?=$productid?>" hidden>
    <input type="text" class="form-control" name="content" >
    <input type="submit" class="btn btn-primary" name="send" value="Gửi">
    </div>
</form>
   </div>
   <?php 
      if(isset($_POST['send']) && $_POST['send']){
        $content = $_POST['content'];
        $productid = $_POST['productid'];
        $userid = $_SESSION['user']['id'];
        $commentdate = date('h:i:sa d/m/Y');
        create_comment($content,$commentdate,$productid,$userid);
        header("location: ".$_SERVER['HTTP_REFERER']);
      }
   ?>
</body>
</html>
