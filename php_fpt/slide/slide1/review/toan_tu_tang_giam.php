<?php

  $x = 5;

  $x1 = $x++; //$x++ <=> $x = $x+1;
  $x2 = ++$x;
  $x3 = --$x;
  $x4 = $x--;

  echo $x1."-".$x2."-".$x3."-".$x4;


?>