<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $sothich = array('sothich1' => 'Xem phim', 'sothich2' => 'Đá bóng', 'sothich3' => 'Đi chơi');
    $hobbies = ["hb1" => "Watch movie", "hb2" => "Play football", "hb3" => "Go travel"];

    $result = "";
    foreach ($hobbies as $key => $value) {
        $result .=  '<input type="checkbox" name="hb[]" value="' . $value . '"> ' . $value . '<br>';
    }
    ?>
  
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <?= $result ?>
        <input type="submit" name="save" value="Gửi">
    </form>
   <?php 
     if(isset($_POST['save'])&&($_POST['save'])){
        $myhobies = $_POST['hb']??[];
        
        foreach($myhobies as $key=>$value){
            echo $value.'<br>';
        }
     }
   ?>
</body>

</html>