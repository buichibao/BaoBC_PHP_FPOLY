<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- action gửi về chính nó -->
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <input type="number" name="a" id='a' placeholder="Nhập hệ số a"><br>
        <input type="number" name="b" id='b' placeholder="Nhập hệ số b"><br>
        <input type="submit" name="caculate" value="Giải">
    </form>
    <?php
    if (isset($_POST['caculate']) && ($_POST['caculate'])) {
        $a =  (float) $_POST['a'];
        $b =  (float) $_POST['b'];
        $pt = $a . 'x + ' . $b . '= 0';
        if ($a == 0) {
            if ($b == 0) {
                $nghiem = "Vô số nghiệm";
            } else {
                $nghiem = "Vô nghiệm";
            }
        } else {
            $nghiem =  -$b / $a;
        }
        $result = '<p>Phương trình : ' .$pt. '</p>
                   <p>Nghiệm: ' .$nghiem. '</p>';
        echo $result;
    }


    ?>

</body>

</html>