<?php

include_once('../database/database.php');

class Barang extends Database{


    function __construct()
    {
        parent::__construct();

    }

    //fungsi untuk menampilkan data
    public function readData(){
        $query = $this->db->prepare("SELECT * FROM barang");
        $query->execute();
        $data = $query->fetchAll();
        
        return $data;
    }

    //digunakan untuk menambahkan data barang baru
    public function createData($kode_barang, $nama_barang, $satuan, $id_jenis, $id_supplier, $harga, $stock){
        $data = $this->db->prepare('INSERT INTO barang (kode_barang,nama_barang,satuan,id_jenis,id_supplier,harga, stock) VALUES (?, ?, ?, ?, ?, ?, ?)');
        
        $data->bindParam(1, $kode_barang);
        $data->bindParam(2, $nama_barang);
        $data->bindParam(3, $satuan);
        $data->bindParam(4, $id_jenis);
        $data->bindParam(5, $id_supplier);
        $data->bindParam(6, $harga);
        $data->bindParam(7, $stock);
        
        $data->execute();
        
        if($data){
            return true;
        }else{
            return false;
        }
    }

    public function updateData($id, $kode_barang, $nama_barang, $satuan, $id_jenis, $id_supplier, $harga, $stock){
        
        $query = $this->db->prepare('UPDATE barang set kode_barang=?,nama_barang=?,satuan=?,id_jenis=?,id_supplier=?, harga=?, stock=? where nim=?');
        
        
        $query->bindParam(1, $kode_barang);
        $query->bindParam(2, $nama_barang);
        $query->bindParam(3, $satuan);
        $query->bindParam(4, $id_jenis);
        $query->bindParam(5, $id_supplier);
        $query->bindParam(6, $harga);
        $query->bindParam(7, $stock);
        $query->bindParam(8, $id);

        $query->execute();

        if($query){
            return true;
        }else{
            return false;
        }

    }

    public function get_by_id($id){
        $query = $this->db->prepare("SELECT * FROM barang where id=?");
        $query->bindParam(1, $id);
        $query->execute();
        return $query->fetch();
    }

    public function deleteData($id){

        $query = $this->db->prepare("DELETE FROM barang where id=?");

        $query->bindParam(1, $id);

        $query->execute();
        if($query){
            return true;
        }else{
            return false;
        }
    }
}

?>