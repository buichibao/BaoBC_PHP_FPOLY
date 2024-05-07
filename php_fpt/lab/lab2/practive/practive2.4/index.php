<?php

echo "Simple Break\n";
for($i = 1 ; $i <= 2; $i++){
    echo "i = $i ";
   for($j = 1 ; $j <= 5 ; $j++){
    if($j==2){
        break;
    }
    echo "j = $j \n";
   }
}

echo "Multi-level break\n";
for($i = 1 ; $i <= 2; $i++){
    echo "i = $i ";
   for($j = 1 ; $j <= 5 ; $j++){
    if($j==2){
        break 2;
    }
    echo "j = $j \n";
   }
}


?>