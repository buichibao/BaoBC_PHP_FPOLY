<?php

include("const_define_includes.php");

function getAreaOfCircle($r){
    return PI*$r*$r;
}
echo getAreaOfCircle(3);

?>