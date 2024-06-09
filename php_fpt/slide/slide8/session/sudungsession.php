<?php 
   session_start();
   if(isset($_SESSION['cart'])){
     foreach ($_SESSION['cart'] as $item) {
       echo "Mã sản phảm  : ".$item[0];
       echo "Tên sản phảm : ".$item[1];
       echo "Giá sản phẩm : ".$item[2];
     }
   }else {
    echo "Session đã bị huỷ";
   }
  
   echo '<a href="khoitaosession.php">Khởi tạo</a>';
   echo '<a href="huysession.php">Huỷ session</a>';

?>