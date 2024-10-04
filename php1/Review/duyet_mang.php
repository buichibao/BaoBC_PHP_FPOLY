<?php 
  
  $array = array(1,2,3,4,5);
  
  //sử dụng vòng lặp for
  for($i = 0 ; $i < count($array); $i ++){
    echo $array[$i];
  }

  //sử dụng vòng lặp while
  $i = 0;
  while($i < count($array)){
    echo $array[$i];
    $i++;
  }

  //sử dụng vòng lặp foreach (as)
  foreach($array as $value){
    echo $value;
  }

  


  //Duyệt mảng 2 chiều 
  //Sử dụng for với 2 chỉ số để duyệt mảng 2 chiều với key là index
  $matrix = [
    [1,2,3,4],
    [5,6,7,8],
    [9,10,11,12]
  ];

  for($i = 0 ; $i < count($matrix);$i ++){
     for($j = 0 ; $j < count($matrix[$i]) ; $j ++){
         echo $matrix[$i][$j];
     }
  }
  // Sử dụng 2 vòng lặp foreach để duyệt mảng 2 chiều
  foreach($matrix as $array){
    foreach($array as $value){
        echo $value;
    }
  }

  $matrix = [
    ["name"=>"Bao","age"=>23,"address"=>"Hà Tĩnh"],
    ["name"=>"Nam","age"=>23,"address"=>"Hà Tĩnh"],
    ["name"=>"Anh","age"=>23,"address"=>"Hà Tĩnh"]
  ];

  foreach($matrix as $array){
    echo $array['name'];
    echo $array['age'];
    echo $array['address'];
  }

?>