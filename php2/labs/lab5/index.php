<?php 
include './views/header.php';
if(isset($_GET['controller'])){
    $controller = $_GET['controller'];
    if (isset($_GET['action'])) {
        $action = $_GET['action'];
    }else{
        $action ='index';
    }
}else{
    $controller = 'home';
    $action = 'index';
}
require_once 'routing.php';
include './views/footer.php';

?>