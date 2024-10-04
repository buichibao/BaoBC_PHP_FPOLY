<?php
require_once "controllers/baseController.php";
class accountController extends BaseController
{
    function __construct()
    {
        $this->folder = 'account';
    }

    public function login(){
        $this->render('login');
    }

    public function register(){
        $this->render('register');
    }
}
