<?php
require_once 'controllers/baseController.php';

class contentController extends BaseController
{
    function __construct()
    {
        $this->folder = 'content';
    }

    public function blog(){
        $this->render('blog');
    }
}

?>