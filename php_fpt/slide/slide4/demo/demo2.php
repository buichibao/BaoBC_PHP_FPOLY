<?php
if(isset($_POST['gender'])){
    $gender = $_POST['gender'];
    echo "$gender <br>";
}
if(isset($_POST['hobbies'])){
    $hobbies = $_POST['hobbies'];
    foreach($hobbies as $item){
        echo "$item <br>";
    }
}

if(isset($_POST['classed'])){
    $classed = $_POST['classed'];
    foreach($classed as $item){
        echo "$item <br>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
       <input type="radio" name="gender" value="Nam">Nam
       <input type="radio" name="gender" value="Nữ">Nữ <br>


       <input type="checkbox" name="hobbies[]" value="Đá bóng">Đá bóng
       <input type="checkbox" name="hobbies[]" value="Bơi lội">Bơi lội
       <input type="checkbox" name="hobbies[]" value="Điện tử">Điện tử
       <input type="checkbox" name="hobbies[]" value="Nhảy dù">Nhảy dù<br>


       <select name="classed[]" multiple>
        <option value="Cấp 1">Cấp 1</option>
        <option value="Cấp 2">Cấp 2</option>
        <option value="Cấp 3">Cấp 3</option>
    
       </select>

      

     
       <input type="submit" value="Lưu">
    </form>
</body>
</html>