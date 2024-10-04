<?php
class BaseController
{
  protected $folder;
  function render($file, $data = array())
  {
    $view_file = str_replace('controllers', '', __DIR__ ) . 'views/' . ((!is_null($this->folder)) ? ($this->folder . '/' . $file . '.php') : ($file . '.php'));
    if (is_file($view_file)) {
      require_once($view_file);
    } else {
      header('Location: index.php?controller=home&action=error');
    }
  }
}
