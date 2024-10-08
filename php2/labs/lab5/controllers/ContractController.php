<?php
require_once "controllers/BaseController.php";

class contractController extends BaseController 
{
  function __construct()
  {
    $this->folder = 'contract';
  }

  public function contract(){
    $this->render('contract');
  } 


}
