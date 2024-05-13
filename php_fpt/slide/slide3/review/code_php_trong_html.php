<?php
  $name = "Bùi Chí Bảo";

  $list = array("Bùi Đức Vinh", "Trần Thị Hương","Bùi Thị Thuý");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2><?php echo $name ?></h2>

    <?php
       if(strtolower($name)=="bùi chí bảo"){
         echo "<p  style='color: green;'>$name</p>";
       }else {
        echo "<p   style='color: red;'>$name</p>";
       }
    ?>
    
    <ul>
    <?php 
        foreach($list as $value){
          echo "<li style='color: aqua;'> $value </li>";
        }
    ?>
    </ul>


    <ul>
      <?php  for ($i=0; $i < count($list) ; $i++) {  ?>
         <li> <?php echo $list[$i] ?></li>
      <?php } ?> 
    </ul>
</body>
</html>