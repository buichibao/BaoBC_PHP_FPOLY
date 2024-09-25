<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <input type="number" id="a" name="a">
        <input type="number" id="b" name="b">
        <input type="submit" name="hienthi" value="Kết quả">
    </form>
    <?php
    if(isset($_POST['hienthi'])&&($_POST['hienthi'])){
        $a = $_POST['a'];
        $b = $_POST['b'];
        
        //Khai báo mảng 
        $mang = array(1,2,3,4);
        $array = [];
        for($i = $a; $i <= $b;$i++){
            $array[] = $i;
        }
        
        $kq = "";
        $chuoicong="";
        $tong = 0;
        $tongchan = 0; $chuoichan ="";
        $tongle = 0; $chuoile ="";
        for($i = 0 ; $i < count($array); $i++){
            $kq .= $array[$i].", ";
            $chuoicong.=$array[$i].' + ';
            $tong +=$array[$i];
            if($array[$i]%2 ==0){
                $chuoichan .= $array[$i]." + ";
                $tongchan += $array[$i];
            }else {
                $chuoile .= $array[$i]." + ";
                $tongle += $array[$i];
            }
        }
        
        echo '<p>Mảng bạn vừa nhập là : ['. rtrim($kq,', ') . '] </p>';
        echo '<h6>Tổng : '. rtrim($chuoicong,' + ') . ' = '.$tong.' </h6>';
        echo '<h6>Tổng chẵn : '. rtrim($chuoichan,' + ') . ' = '.$tongchan.' </h6>';
        echo '<h6>Tổng lẽ: '. rtrim($chuoile,' + ') . ' = '.$tongle.' </h6>';

    }
    ?>
    
</body>
</html>