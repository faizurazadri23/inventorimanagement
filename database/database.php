<?php

class Database{
    private $host = 'localhost';
    private $user = 'root';
    private $pass = '';
    private $db = 'inventory_management';

    protected $conn;

    function __construct()
    {
        if(!isset($this->conn)){
            $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->db);
        }

        if(!$this->conn){
            echo ('Koneksi gagal');

            die();
        }

        return $this->conn;
    }
}
    
?> 
