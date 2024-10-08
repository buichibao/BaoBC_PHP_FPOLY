<?php
require_once "controllers/BaseController.php";

class cartController extends BaseController 
{
  function __construct()
  {
    $this->folder = 'cart';
  }

  public function viewCart(){
    $this->render('viewCart');
  } 


}
