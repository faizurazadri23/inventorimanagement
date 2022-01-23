<?php
class SupplierModel {
    private $table='supplier';
    private $db;

    public function __construct()
    {
        $this->db= new Database;
    }
    public function getAllSupplier()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getSupplierById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id',$id);
        return $this->db->resultId();
    }

    public function tambahSupplier($data)
    {
        $query="INSERT INTO supplier VALUES('',:nama_supplier,:notelp,:email,:alamat)";
        $this->db->query($query);
        $this->db->bind('nama_supplier',$data['nama_supplier']);
        $this->db->bind('notelp',$data['notelp']);
        $this->db->bind('email',$data['email']);
        $this->db->bind('alamat',$data['alamat']);
        $this->db->execute();
        
        return $this->db->rowCount(); 
    }

    public function hapusSupplier($id)
    {
        $query="DELETE FROM supplier WHERE id=:id";
        $this->db->query($query);
        $this->db->bind('id',$id);
        $this->db->execute();

        return $this->db->rowCount();
    }
    public function ubahSupplier($data)
    {
        $query="UPDATE supplier SET
                    nama_supplier = :nama_supplier,
                    notelp = :notelp,
                    email = :email,
                    alamat = :alamat
                    WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('nama_supplier',$data['nama_supplier']);
        $this->db->bind('notelp',$data['notelp']);
        $this->db->bind('email',$data['email']);
        $this->db->bind('alamat',$data['alamat']);
        $this->db->bind('id',$data['id']);
        $this->db->execute();
        
        return $this->db->rowCount(); 
    }
}