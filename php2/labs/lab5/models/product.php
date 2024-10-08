<?php
require_once 'database.php';
class Product
{   
    private $db;
    function __construct(Database $database) {
        $this->db = $database->getConnection();
    }

    public function getAllProduct() 
    {
        $sql = "SELECT * FROM product WHERE status = 1";
        $result = $this->db->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    public function getProductFindbyName($productName) {
        // if(!isset($_GET['productName']){
        //     return $this->getAllProduct();
        // }else{
        //      $sql = "SELECT * FROM product WHERE status = 1 AND product_name like '%$productName%'";
        //      $result = $this->db->query($sql);
        //      return $result->fetch_all(MYSQLI_ASSOC);
        // }
       
    }
    public function deleteProductById() {}
    public function updateProductById() {}
}
