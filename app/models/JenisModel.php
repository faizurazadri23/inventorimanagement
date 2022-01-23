<?php
class JenisModel {
    private $table='jenis';
    private $db;

    public function __construct()
    {
        $this->db= new Database;
    }
    public function getAllJenis()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getJenisById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id',$id);
        return $this->db->resultId();
    }

    public function tambahJenis($data)
    {
        $query="INSERT INTO jenis VALUES('',:nama_jenis,:keterangan)";
        $this->db->query($query);
        $this->db->bind('nama_jenis',$data['nama_jenis']);
        $this->db->bind('keterangan',$data['keterangan']);
        $this->db->execute();
        
        return $this->db->rowCount(); 
    }

    public function hapusJenis($id)
    {
        $query="DELETE FROM jenis WHERE id=:id";
        $this->db->query($query);
        $this->db->bind('id',$id);
        $this->db->execute();

        return $this->db->rowCount();
    }
    public function ubahJenis($data)
    {
        $query="UPDATE jenis SET
                    nama_jenis = :nama_jenis,
                    keterangan = :keterangan
                    WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('nama_jenis',$data['nama_jenis']);
        $this->db->bind('keterangan',$data['keterangan']);
        $this->db->bind('id',$data['id']);
        $this->db->execute();
        
        return $this->db->rowCount(); 
    }
}