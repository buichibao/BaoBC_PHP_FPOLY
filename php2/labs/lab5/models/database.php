<?php

class Database
{
    private $localhost;
    private $username;
    private $password;
    private $databasename;
    private $connect;

    function __construct()
    {
        $this->localhost = 'localhost';
        $this->username = 'root';
        $this->password = 'baobc';
        $this->databasename = 'duanmau';
        $this->connect();
    }

    private function connect()
    {
        $this->connect = new mysqli($this->localhost, $this->username, $this->password, $this->databasename);

        if ($this->connect->connect_errno) {
            die("Kết nối thất bại" . $this->connect->connect_errno);
        } else {
            echo "Kết nối thành công";
        }
    }

    public function getConnection()
    {
        return $this->connect;
    }

    public function close()
    {
        $this->connect->close();
    }
}

   ?>