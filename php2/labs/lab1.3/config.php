<?php
try {
    $servername ='localhost';
    $username ='root';
    $password ='baobc';
    $databasename ='mvc_student';
    $connect = mysqli_connect($servername,$username,$password,$databasename);
    // echo "Kết nối thành công";
} catch (Exception $e) {
//    echo "Kết nối thất bại ". $e;
}

?>