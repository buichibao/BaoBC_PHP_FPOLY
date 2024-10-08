<?php
require_once "controllers/BaseController.php";

class introduceController extends BaseController 
{
  function __construct()
  {
    $this->folder = 'introduce';
  }

  public function intro(){
    $this->render('intro');
  } 


}
