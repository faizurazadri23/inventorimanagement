<?php


include_once('../database/database.php');

class Jenis extends Database{


    function __construct()
    {
        parent::__construct();
    }

    //fungsi untuk menampilkan data
    public function readData(){
        $query = $this->db->prepare("SELECT * FROM jenis");
        $query->execute();
        $data = $query->fetchAll();
        
        return $data;
    }

    //digunakan untuk menambahkan data barang baru
    public function createData($nama_jenis, $keterangan){
        $data = $this->db->prepare('INSERT INTO jenis (nama_jenis,keterangan) VALUES (?, ?)');
        
        $data->bindParam(1, $nama_jenis);
        $data->bindParam(2, $keterangan);
        
        $data->execute();
        
        if($data){
            return true;
        }else{
            return false;
        }
    }

    public function updateData($id, $nama_jenis, $keterangan){
        
        $query = $this->db->prepare('UPDATE jenis set nama_jenis=?,keterangan=? where id=?');
        
        
        $query->bindParam(1, $nama_jenis);
        $query->bindParam(2, $keterangan);
        $query->bindParam(3, $id);

        $query->execute();

        if($query){
            return true;
        }else{
            return false;
        }

    }

    public function get_by_id($id){
        $query = $this->db->prepare("SELECT * FROM jenis where id=?");
        $query->bindParam(1, $id);
        $query->execute();
        return $query->fetch();
    }

    public function deleteData($id){

        $query = $this->db->prepare("DELETE FROM jenis where id=?");

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