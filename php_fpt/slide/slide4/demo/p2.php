<?php
if (isset($_POST['sothich'])) {
    $tatcasothich = $_POST['sothich'];
    print_r($tatcasothich);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="">Sở thích:</label>
        <br>
        
        <!-- <input type="checkbox" name="sothich[]" value="Đá bóng"><b>Đá bóng</b>
        <input type="checkbox" name="sothich[]" value="Xem phim"><b>Xem phim</b>
        <input type="checkbox" name="sothich[]" value="Nghe nhạc"><b>Nghe nhạc</b> -->

        <!-- Chọn 1 giá trị -->
        <select name="sothich" multiple id="">
            <option value="Đá bóng">Đá bóng</option>
            <option value="Xem phim">Xem phim</option>
            <option value="Nghe nhạc">Nghe nhạc</option>
        </select>
        <!-- Chọn nhiều giá trị -->
        <select name="sothich[]" multiple id="">
            <option value="Đá bóng">Đá bóng</option>
            <option value="Xem phim">Xem phim</option>
            <option value="Nghe nhạc">Nghe nhạc</option>
        </select>

        <!-- <input type="text" name="sothich[]" placeholder="Sở thích 1">
        <input type="text" name="sothich[]" placeholder="Sở thích 2">
        <input type="text" name="sothich['st3']" placeholder="Sở thích 3"> -->
        <input type="submit">
    </form>
</body>

</html>