<?php
//require 'database.php';
spl_autoload_register(function ($class) {
    if (strstr($class, 'Core\\')) { // có thể dùng strpos
        $filename = str_replace('Core\\', '', $class);
        $filename.='.php';
        if (file_exists($filename)) {
            include $filename;
        } else {
            echo "File không tồn tại: " . $filename;
        }
    }
});

use \Core\database as DB;

$database = new DB();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>Home Page</p>
</body>

</html>