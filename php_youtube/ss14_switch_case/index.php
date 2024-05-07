<?php

$color = "red";

switch($color){
   case "yellow":
    echo "this is yellow";
    break;

    case "red":
    echo "this is red";
    break;  // nếu k có break thì nó vẫn chạy case phía sau

    case "green":
    echo "this is green";
    break;

    case "blue":
    echo "this is blue";
    break;

    default:
    echo  "No anwser"; // nếu k có case nào đúng thì default sẽ được thữ hiện
}

?>