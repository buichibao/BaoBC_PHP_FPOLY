

<?php
//"" mới dùng được escapeCharacter vd : /n.... còn dùng '' thì không dùng được.
$output1 = '$hihi';
$output2 = "10\$";
$output3 = '\'Hhihi\'';
$output4 = "\u{C2A9}";
$output5 = "abc\nxyz";
$output6 = "\u{00A9}"; // copy right
echo $output6;
echo $output1;
echo $output2;
echo $output3;
echo $output4;
echo $output5;
?>