<?php
namespace Core;

use mysqli;

class Database{
    public function __construct(){
        $servername = 'localhost';
        $username   = 'root';
        $password   = 'baobc';

        $connect = new mysqli($servername,$username,$password);

        if(!$connect){
            die("Connection failed: ".$connect->connect_error());
        }else{
            echo "Connected Successfully";
        }
    }

    public function HelloWorld(){
        echo "Hello World";
    }
    
}

?>