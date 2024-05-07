<?php

$fruits = array('apple','banana','orange','grapes');
foreach ($fruits as $value){
    echo $value." ";
}

$employee = array(
    'name' => "John Smith",
    "age"  => 30,
    "profession"
);

foreach($employee as $key=>$value){
    echo sprintf("%s => %s \n",$key,$value);
}


?>