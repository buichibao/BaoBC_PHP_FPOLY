<?php
if(isset($_POST["gui"])){
    foreach($_POST["hocvan"] as $item){
        echo $item;
        }
    echo $_POST['name']['ho']." ".$_POST['name']['tendem']." ".$_POST['name']['ten'];

    foreach($_POST["sothich"] as $item){
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
        <input type="text" name="name[ho]">
        <input type="text" name="name[tendem]">
        <input type="text" name="name[ten]">
        
        <select name="hocvan[]" size=2 multiple>
            <option value="Lớp 1">Lớp 1</option>
            <option value="Lớp 2">Lớp 2</option>
            <option value="3">Lớp 3</option>
            <option value="4">Lớp 4</option>
            <option value="5">Lớp 5</option>
            <option value="6">Lớp 6</option>
        </select>
        
        <input type="checkbox" name="sothich[]" value="Đá bóng">A
        <input type="checkbox" name="sothich[]" value="Ăn ngủ">B
        <input type="checkbox" name="sothich[]" value="Đi Chơi">C
        <input type="checkbox" name="sothich[]" value="Học Bài">D

        <input type="submit" value="gửi" name="gui">
    </form>
</body>
</html>