<?php
//require      : gộp file được nhiều lần (bị lỗi file.php ta gộp thì file.index đứng luôn)
//require_once : chỉ gộp file được 1 lần (bị lỗi file.php ta gộp thì file.index đứng luôn)

//include      :gộp file được nhiều lần  (bị lỗi file.php ta gộp thì file.index vẫn chạy bình thường nhưng báo lỗi file gộp)
//include_once : chỉ gộp file được 1 lần  (bị lỗi file.php ta gộp thì file.index vẫn chạy bình thường nhưng báo lỗi file gộp)

echo "Đây là code file index.php <br>";
require_once "product.php"; //in ra
require "product.php";  // vẫn cho phép in ra in ra
require_once "product.php"; // có rồi không in nữa

include "product.php"; //in ra
include_once "product.php"; //có rồi không in nữa

require "product.php"; //in ra
require "product.php"; //in ra

echo "Đây là code file index.php sau khi gộp <br>";
?>