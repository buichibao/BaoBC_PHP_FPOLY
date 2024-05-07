<?php

//Array dạng 1 chiều , truy cập các phần từ thông qua index
//Cách 1
  $name = array("bảo","nam","nhật");

  echo "$name[0] , $name[1] , $name[2] <br>";

  echo $name[0] .",". $name[1]  .",".  $name[2];

//Cách 2
  $name2 = array();
  $name2[0] = 2;
  $name2[1] = 2;
  $name2[2] = 2;

  echo $name2[0] .",". $name2[1]  .",".  $name2[2];

//Cách 3
  $name3 = [];
  $name3[0] = 3;
  $name3[1] = 3;
  $name3[2] = 3;

  echo $name3[0] .",". $name3[1]  .",".  $name3[2];


//Cách 4
  $name4 = ["hà","thu","trần"]  ;
  echo $name4[0] .",". $name4[1]  .",".  $name4[2];


//Array dạng Json : truy xuất các phần tử theo dạng Json thông qua key (không sử dụng được index)
$inFor1 = [
    "name"     => "bảo",
    "address"  => "hà tĩnh",
    "className"=>"WD19201"
];

$inFor1["phone"] = "0945896269";

echo $inFor1['name'];
echo $inFor1['address'];
echo $inFor1['className'];
echo $inFor1['phone'];


$inFor2 = array("12A3" =>34,"12A2"=>21);
echo $inFor2['12A3'];

//Array đa chiều

$thongTin = array(
    array("Bảo","2001","hà tĩnh"),
    array("Nam","2001","hà tĩnh"),
    array("Nhật","2001","hà tĩnh"),
    array("Pháp","2001","hà tĩnh")
);

for($i = 0; $i <count($thongTin);$i++){
   for($j = 0 ; $j < count($thongTin[$i]);$j++){
    echo $thongTin[$i][$j]." ";
   }
   echo "\n";
};

$thongTin2 = [
    array("1","Bùi Chí Bảo","12A3"),
    ["dev" => "công"],
    ["key" => null],
    ["2","Trần Đình Nam","12A3"],
    "codegym" =>array("TrungDC","QuangNN")
];

echo $thongTin2[0][1];    //"Bùi Chí Bảo
echo "\n";
echo $thongTin2[1]["dev"];   //Công
echo "\n";
echo $thongTin2[2]["key"];   //" "
echo "\n";
echo $thongTin2[3][2];          //12A3
echo "\n";
echo $thongTin2["codegym"][0];  //TrungDC

$thongTin3 = [
  ["key" => "value"],
  "student" => ["dev" => "công"],
  ["key" => "value"],
  ["2","Trần Đình Nam","12A3"],
  "codegym" =>array("TrungDC","QuangNN")
];

echo $thongTin3["student"]["dev"]; 
echo $thongTin3[0]["key"]; 
echo $thongTin3[1]["key"]; 
?>