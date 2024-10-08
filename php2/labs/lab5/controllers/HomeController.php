<?php
require_once "controllers/BaseController.php";

class homeController extends BaseController 
{
  function __construct()
  {
    $this->folder = null;
  }

  public function index(){
    $this->render('home');
  } 

  public function error(){
    $this->render('error');
  }
}
