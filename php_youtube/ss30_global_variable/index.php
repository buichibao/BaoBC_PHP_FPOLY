<?php
//$GLOBALS : biến toàn cục
$a = 10;
$b = 5;

// function tong(int $a , int $b){ //$a và $b ở đây khác $a và $b ở phần khai báo
//     $c = $a + $b;
//     return $c;
// }

//

function tong(){ 
    $GLOBALS['c'] = $GLOBALS['a']+$GLOBALS['b'];
    return  $GLOBALS['c'];
}

echo tong();
echo $c;
echo  $GLOBALS['c'];

//$_POST['tên trường dữ liệu] : dùng để lấy giá trị từ form mà người dùng nhập thông qua phương thức post
//$_GET['tên trường dữ liệu'] : ---phương thức get
//$_REQUEST['tên trường dữ liệu']: --- post và get đều dùng được

// echo $_POST['name'];
// echo $_GET['name'];
   echo $_REQUEST['name'];

?>

<form action="index.php" method="post">
    <input type="text" name="name" value="Bảo">
    <button type="submit">Submit</button>
</form>