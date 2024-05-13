<?php
if(isset($_POST['btn'])){
    $name = $_POST["name"];
    $gender = $_POST["gender"];
    $hobbies = $_POST["hobbies"];
    $classed = $_POST["classed"];

    echo $name."\n";

    echo $gender."\n";

    foreach($hobbies as $item){
        echo $item;
    }

    
    foreach($classed as $item){
        echo $item;
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
        <input type="text" name="name">
        <input type="radio" name="gender" value="Nam"> Nam
        <input type="radio" name="gender" value="Nữ"> Nữ

        <input type="checkbox" name="hobbies[]" value="Đá bóng">Đá bóng
        <input type="checkbox" name="hobbies[]" value="Chơi game">Chơi game
        <input type="checkbox" name="hobbies[]" value="Ngủ">Ngủ
        <input type="checkbox" name="hobbies[]" value="Đọc sách">Đọc sách


        <select name="classed[]" multiple=2>
             <option value="Cấp 1">Cấp 1</option>
             <option value="Cấp 2">Cấp 2</option>
             <option value="Cấp 3">Cấp 3</option>
             <option value="Cấp 4">Cấp 4</option>
             <option value="Cấp 5">Cấp 5</option>
             <option value="Cấp 6">Cấp 6</option>
             <option value="Cấp 7">Cấp 7</option>
        </select>

        <input type="submit" value="SUBMIT" name="btn">
    </form>
</body>
</html>