<?php
$controllers = array(
  'home' => ['error', 'index'],
  'account'=>['login','register'],
  'content'=>['blog'],
  'contract'=>['address']
); 

if (!array_key_exists($controller, $controllers) || !in_array($action, $controllers[$controller])) {
  $controller = 'home';
  $action = 'error';
}

include_once('controllers/' . $controller . 'Controller.php');
$class = $controller . 'Controller';
$controller = new $class;
$controller->$action();

?>