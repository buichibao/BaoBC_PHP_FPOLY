<?php
require_once "controllers/BaseController.php";
require_once "./models/product.php";
class productController extends BaseController
{
    function __construct()
    {
        $this->folder = 'product';
    }
    

    public function list(){
        $db = new Database();
        $p  = new Product($db);
        $listproduct = $p->getAllProduct();
        $this->render('list',$data = $listproduct);
    }

    public function detail(){
        $this->render('detail');
    }

    public function add(){
        $this->render('add');
    }
}
