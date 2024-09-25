<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1{
            color: red;
        }
    </style>
</head>
<body>
    
</body>
</html>
<?php
   $total = 10000;
   $data ='<h1>Bùi Chí Bảo</h1>
           <h2>'.$total.'</h2>
           <h2>'.number_format($total,0,',','.').'</h2>';
   $wel ="Hello WD19201";
   echo $data;
   echo $wel;
?>