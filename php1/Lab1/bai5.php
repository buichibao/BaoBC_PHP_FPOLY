<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        function check() {
            let ho = document.getElementById('ho');
            let ten = document.getElementById('ten');
            document.getElementById('error_ho').innerHTML = ""; 
            document.getElementById('error_ten').innerHTML = ""; 
            if (ho.value === "") {
                document.getElementById('error_ho').innerHTML = "Họ không được bỏ trống";
                ho.focus();
                return false;
            }
            if (ten.value === "") {
                document.getElementById('error_ten').innerHTML = "Tên không được bỏ trống";
                ten.focus();
                return false;
            }
            return true;
        }
    </script>
</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <label for="ho">Họ</label>
        <input id="ho" type="text" name="ho"><br>
        <p id='error_ho'></p>
        <label for="ten">Tên</label>
        <input id="ten" type="text" name="ten"><br>
        <p id='error_ten'></p>
        <label for="a">Cạnh a</label>
        <input id="a" type="number" name="a"><br>
        <label for="b">Cạnh b</label>
        <input id="b" type="number" name="b"><br>
        <input type="submit" name="btn" value="Gửi" onclick="return check()">
    </form>

    <?php
    if ((isset($_POST['btn'])) && ($_POST['btn'])) {
        $hoten = $_POST['ho'] . " " . $_POST['ten'];
        $a = $_POST['a'];
        $b = $_POST['b'];
        if ($a == $b) {
            $kl = "Đây là hình vuông";
        } else {
            $kl = "Đây là hình chữ nhật";
        } 
        $kq =
        '<div>
        <p>Họ và tên : '.$hoten.'</p>
        <p>Cạnh a : '.$a.'</p>
        <p>Cạnh b : '.$b.'</p>
        <p>Kết luận : '.$kl.'</p>
        </div>';
        echo $kq;
    }
    ?>


   

</body>

</html>