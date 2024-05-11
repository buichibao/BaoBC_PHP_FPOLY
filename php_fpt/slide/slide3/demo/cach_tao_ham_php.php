<?php

$x = 4;

function assignx(){
    $x = 0;
    echo "$x \n";
    echo $GLOBALS['x']."\n";
}

assignx();
echo $x."\n";


function duyet(...$args){
    for($i = 0 ; $i < func_num_args(); $i++){
          echo $args[$i] ."\t";
    }
}

duyet(1,2,3,4,5);
?> 