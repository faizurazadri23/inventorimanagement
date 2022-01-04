<?php

class Database{
    private $host = 'localhost';
    private $user = 'root';
    private $pass = '';
    private $database = 'inventory_management';

    protected $db;

    function __construct()
    {
        if(!isset($this->db)){
            $this->db = new PDO("mysql:host={$this->host};dbname={$this->database}", $this->user, $this->pass);
            
        }

        if(!$this->db){
            echo ('Koneksi gagal');

            die();
        }

        return $this->db;
    }
}
    
?> 
