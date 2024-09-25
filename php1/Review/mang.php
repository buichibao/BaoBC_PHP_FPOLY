<?php

//Các cách khai báo mảng 
//Cách 1 : sử dụng hàm array()
$arr1 = array(); //mảng rỗng
$arr2 = array(1, 2, 3, 4, 5);
$arr3 = array("key1" => "value1", "key2" => "value2");

//Cách 2 : sử dụng dấu [ ]
$arr4 = []; //mảng rỗng
$arr5 = [1, 2, 3, 4, 5];
$arr6 = [
    "name1" => "Bảo",
    "name2" => "Nam",
    "name1" => "Hiền", // name1 sẽ có value là Hiền vì trùng key thì sẽ ghi đè giá trị
];

//Cách 3 : sử dụng hàm range()
//Khai báo 1 mảng index có giá trị 1 -> 5
$arr7 = range(1, 5);
//Khai báo 1 mảng index có giá trị a -> z    
$arr8 = range("a", "z");
//Khai báo 1 mảng index có giá trị 1 ->10 bước nhảy 2
$arr9 = range(1, 10, 2); // 1 , 3, 5 ,7 ,9

//Khởi tại mảng
$arr10 = array();
//Ta có thể thêm giá trị vào mảng bằng 3 cách
//Cách 1 : Thêm bằng chỉ số index
$arr10[0] = "Bùi";
$arr10[1] = "Chí";
$arr10[2] = "Bảo";

//Cách 2 : Thêm bằng key => value
$arr10['id']='184366661';
$arr10['class'] = '12A3';

//Cách 3 : Không truyền gì thì mặc định phần tử sẽ thêm vào cuối mảng
$arr10[] = "Haha"; //index [3] nó tiếp tục cộng
var_dump($arr10);

//Truy xuất mảng
$array = [
    "name" => "Bùi Chí Bảo",
    "class_name"=>"12A3",
    2001,
    "669 Mai Thục Loan"
];

echo $array["name"];        //Bùi Chí Bảo
echo $array["class_name"];  // 12A3
echo $array[0];             // 2001
echo $array[1];             // 669 Mai Thục Loan

//Kiểu dữ liệu của mảng trong PHP
$array = [
    "year" => 2024,
    "name" => "Bùi Chí Bảo",
    100,
    array(1,2,3,4)
];
print_r($array);

// Xoá phần tử trong mảng bằng unset()
$array =[1,2,3,4,5];
unset($array[1]); // xoá phần tử vị trí 1 , sau khi xoá xong các phần tử vẫn dữ nguyên vị trí
print_r($array);


//Các hàm làm việc với mảng PHP
$array = [1,2,3,4,5];

//hàm count() trả về số lượng phần tử trong mảng
$array = [1,2,3,4,5];
echo count($array); //5

//hàm array_push() thêm phần tử vào cuối mảng , có thể thêm 1 hoặc nhiều phần tử
//hàm array_push() sau khi thêm thì trả về mảng mới
$array = [1,2,3,4,5];
array_push($array,6);
array_push($array,7,8,9);
print_r($array); // 1,2,3,4,5,6,7,8,9

//hàm array_pop() xoá vị trí cuối cùng của mảng , trả về chính giá trị vừa xoá
$array = [1,2,3,4,5];
$delete = array_pop($array);
echo $delete;    // 5
print_r($array); // 1,2,3,4

//hàm array_pop() nếu xoá mảng rỗng thì sẽ trả về giá trị NULL
$array = [];
$delete = array_pop($array);
var_dump($delete); //NULL
if(is_null($delete)){
    echo "Đây là null";
}
print_r($array);    // Mảng rỗng

//Hàm array_shift() : xoá vị trí đầu tiên của mảng , và trả về chính phầm tử đã xoá
$array = [1,2,3,4,5];
$delete = array_shift($array);
echo $delete;
print_r($array);

//Hàm array_shift() : xoá mảng rỗng thì sẽ trả về giá trị NULL
$array = [];
$delete = array_shift($array);
var_dump($delete);

//Hàm array_unshift() : thêm phầm tử vào đầu mảng có thể thêm 1 hoặc nhiều
//Sau khi thêm trả về 1 mảng mới
$array = [1,2,3,4,5];
array_unshift($array,0);
array_unshift($array,-2,-1);
var_dump($array); // -2,-1,0,1,2,3,4,5

//Hàm in_array(value , $array) : tìm kiếm 1 phần tử có trong mảng không
// Nếu có trả về true , nếu không trả về false
$array = [1,2,3,4,5];
echo in_array(2,$array)?"Tìm thấy":"Không thấy"; // Tìm thấy
echo in_array(6,$array)?"Tìm thấy":"Không thấy"; // Không thấy

//Hàm array_keys($array) : trả về 1 mảng gồm tất cả các key trong mảng $array
$array = [1,2,3,4,5];
$keys = array_keys($array);
var_dump($keys); //0 , 1 , 2 , 3, 4 

//Hàm array_keys($array) :  nếu $array rỗng thì trả về mảng mảng rỗng
$array = [];
$keys = array_keys($array);
var_dump($keys); // mảng rỗng không phải NULL

//Hàm array_values($array) : trả về mảng gồm tất cả value trong mảng $array
$array = [1,2,3,4,5];
$values = array_values($array);
var_dump($values); // 1,2,3,4,5

//Hàm array_values($array): nếu $array rỗng thì trả về mảng rỗng
$array = [];
$values = array_values($array);
var_dump($values); //mảng rỗng chứ không phải NULL

//Hàm array_merge($arr1 ,$arr2, ...$arrn) : gộp 2 hoặc nhiều mảng trả về 1 mảng mới bao gồm tất cả các phần tử của mảng khác
$array1 = [1,2];
$array2 = ["a","b","c"];
$merged = array_merge($array1, $array2);
var_dump($array1); // các mảng khác vẫn được giữ nguyên : 1 , 2 
var_dump($array2); // các mảng khác vẫn được giữ nguyên : a , b , c
var_dump($merged); // 1 , 2 , a , b,c

//hàm array_reverse($array) : trả về 1 mảng với với thứ tự đảo ngược ($newArray), $array vẫn giữ nguyên
$array = [1,2,3,4,5];
$newArray = array_reverse($array);
var_dump($newArray); // 5 , 4 , 3 ,2 ,1
var_dump($array); // 1 ,2 ,3 ,4 ,5

//hàm slice($array ,index , số phần tử): lấy 1 phần của mảng trả về chính mảng mình lấy
//$array : mảng gốc
//index : chỉ số bắt đầu lấy
//số phẩn tử : số phần tử cần lấy bắt đầu từ vị trí index
//trả về 1 mảng mới gồm các phần tử được lấy ra
$array = ["a","b","c","d","e","f"];
$sub_array = array_slice($array,2,3);
var_dump($sub_array); //c ,d ,e

//hàm splice($array,index,số phần tử cần xoá,[các phần tử cần thêm])
//hàm sẽ trả về 1 mảng chứa các phầm tử bị xoá , nếu k xoá phần tử nào thì trả về mảng rỗng
//mảng ban đầu sẽ bị biến đổi thành mảng mới
$array = [1,2,3,4,5];
$delete_array = array_splice($array,1,0,[9,10]);
print_r($newArray); // mảng rỗng
print_r($array); //1,9,10,2,3,4,5

$array = [1,2,3,4,5];
$delete = array_splice($array,1,2,[0,0,0]);
print_r($delete); // 2,3
print_r($array);  //1,0,0,0,4,5

//hàm array_map() : sử dụng để áp dụng hàm cho tất cả các phần tử trong mảng
//trả về 1 mảng mới gồm các phần tử đã áp dụng hàm
$array = [1,2,3,4,5];
$newArray = array_map(function($value){
     return $value + $value;
},$array);
print_r($array);
print_r($newArray);


$array1 = [1,2,3];
$array2 = [9,8,7];
$newArray = array_map(function($value1, $value2){
      return $value1 + $value2;
},$array1,$array2);
print_r($array1);
print_r($array2);
print_r($newArray);

//hàm array_filter() : sử dụng để lọc và trả về 1 mảng mới dựa trên điều kiện
//nếu không có phần tử nào thoã mãn thì trả về mảng rỗng
$array = [1,2,3,4,5];
$newArray = array_filter($array,function($value){
    return $value < 0;
});
print_r($newArray);
print_r($array);


// ARRAY_FILTER_USE_KEY : dùng chết độ ( mode) lấy key thay vì value của mảng
$array = [
    "a"=>1,
    "b"=>2,
    "c"=>3,
    "d"=>4
];
$newArray = array_filter($array,function($key){
   return $key !=="b";
}, ARRAY_FILTER_USE_KEY);
print_r($newArray);
print_r($array);


//hàm array_reduce() : dùng để tích luỹ và trả về 1 giá trị tích luỹ cuối cùng 
//Trả về 1 giá trị tích luỹ khi thực hiện tính toán dựa trên tất cả các giá trị của mảng

$array = array(1,2,3,4,5);
$sum = array_reduce($array,function($carry,$item){
    return $carry+$item;
});
echo $sum; // 15

$array = [1,3,5,7];
$sum = array_reduce($array,function($carry,$item){
    return $carry + $item;
},10);
echo $sum; //26

$array = ["Hello"," ","Hiền"];
$string = array_reduce($array, function($carry,$item){
   return $carry.$item;
});
echo $string;


?>