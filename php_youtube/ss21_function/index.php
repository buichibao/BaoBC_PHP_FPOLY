<?php


//0 tham số
function hello(){
    echo "hello \n";
}
hello();

//1 tham số
function getName($ten){
    echo "xin chào $ten \n";
}
getName("bao");
getName("bao1");
getName("bao2");

//2 tham số
function getInfor($name,$yearOfbirth){
   echo "tôi tên $name tôi sinh năm $yearOfbirth \n";
}
getInfor("bao",2001);



//tham số mặc định
function thamSoMacDinh( $ten ="bảo" ){
   echo "$ten";
}

thamSoMacDinh();  // nếu k truyền giá trị khi gọi hàm , thì nó sẽ tự động lấy giá trị của tham số mặc định
thamSoMacDinh("nam"); //thì nối lấy tham số mình vừa truyền


//hàm có kiểu dữ liệu trả về
function tong($a,$b){
    $tong = (int)$a + (int)$b;
    return $tong;
}

echo tong("2",7);


function hieu(int $a,int $b){
    $tong = $a + $b;
    return $tong;
}

echo hieu("4",7);  //khi khai báo $a = "4" khi thực hiện phép toán nó vẫn hiểu = 4

?>