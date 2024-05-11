<?php
  $name = "Bui Chi Bao";

  $list = ["Bui Chi Bao 1","Bui Chi Bao 2","Bui Chi Bao 3"];

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Helo</h1>
    <h2><?php echo $name ?></h2>
    <?php
       if(strtolower($name)=="bui chi bao"){
         echo "<p style: 'color=red'> $name </p>";
       }


    ?>
</body>
</html>