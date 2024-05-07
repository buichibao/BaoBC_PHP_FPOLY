<?php

//generator 

$result =  function(){
    yield 1;
    yield from [2,3,4];
    yield 5;
};

foreach ($result() as  $key => $value) {
    echo $value;
}

?>