<?php 

//Khai báo mảng 2 chiều

//Cách 1 : Khai báo bằng []
$matrix = [
    [1,2,3,4],
    [1,2,3,4],
    [1,2,3,4]
];
print_r($matrix);

//Cách 2 : Khai báo bằng array()
$array1 = [1,2,3,4];
$array2 = [1,2,3,4];
$array3 = [1,2,3,4];
$array4 = [1,2,3,4];
$matrix = array($array1,$array2,$array3,$array4);
print_r($matrix);

//truy xuất phần tử trong ma trận
echo $matrix[2][2]; // 3
//thay đổi giá trị
$matrix[0][0] = 100; 


//Thêm 1 phẩn tử vào 1 mảng 2 chiều 
//(có nghĩa là thêm 1 hàng mới vào ma trận)
$matrix[] = ['A','B','C','D']; 
print_r($matrix);

//Đếm số hàng trong ma trận
$row = count($matrix);
//Đếm số cột trong ma trận
$col = count($matrix[0]);

echo $row.$col;


//Mảng 2 chiều kết hợp , các truy xuất mảng
$matrix = [
    ['id'=>1,'name'=>'Bảo'],
    ['id'=>2,'name'=>'Nam'],
    ['id'=>3,'name'=>'Đức']
];

echo $matrix[2]['name'];

?>