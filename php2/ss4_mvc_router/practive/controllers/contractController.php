<?php
require_once 'controllers/baseController.php';

class contractController extends BaseController
{
    function __construct()
    {
        $this->folder = 'contract';
    }

    public function address(){
        $this->render('address');
    }
}


?>