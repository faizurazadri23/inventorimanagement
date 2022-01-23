<?php
class BarangModel {
    private $table='barang';
    private $db;

    public function __construct()
    {
        $this->db= new Database;
    }
    public function getAllBarang()
    {
        $this->db->query('SELECT barang.*, jenis.nama_jenis, jenis.id as id_jenis,supplier.id as id_supplier, supplier.nama_supplier FROM ' . $this->table .' INNER JOIN jenis ON barang.id_jenis = jenis.id INNER JOIN supplier ON barang.id_supplier = supplier.id');
        return $this->db->resultSet();
    }

    public function getBarangById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id',$id);
        return $this->db->resultId();
    }

    public function tambahBarang($data)
    {
        $query="INSERT INTO barang VALUES('',:kode_barang,:nama_barang,:satuan,:id_jenis,:id_supplier,:harga,:stok)";
        $this->db->query($query);
        $this->db->bind('kode_barang',$data['kode_barang']);
        $this->db->bind('nama_barang',$data['nama_barang']);
        $this->db->bind('satuan',$data['satuan']);
        $this->db->bind('id_jenis',$data['id_jenis']);
        $this->db->bind('id_supplier',$data['id_supplier']);
        $this->db->bind('harga',$data['harga']);
        $this->db->bind('stok',$data['stok']);
        $this->db->execute();
        
        return $this->db->rowCount(); 
    }

    public function hapusBarang($id)
    {
        $query="DELETE FROM barang WHERE id=:id";
        $this->db->query($query);
        $this->db->bind('id',$id);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahbarang($data)
    {
        $query="UPDATE barang SET
                    kode_barang = :kode_barang,
                    nama_barang = :nama_barang,
                    satuan = :satuan,
                    id_jenis = :id_jenis,
                    id_supplier = :id_supplier,
                    harga = :harga,
                    stok = :stok
                    WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('kode_barang',$data['kode_barang']);
        $this->db->bind('nama_barang',$data['nama_barang']);
        $this->db->bind('satuan',$data['satuan']);
        $this->db->bind('id_jenis',$data['id_jenis']);
        $this->db->bind('id_supplier',$data['id_supplier']);
        $this->db->bind('harga',$data['harga']);
        $this->db->bind('stok',$data['stok']);
        $this->db->bind('id',$data['id']);
        $this->db->execute();
        
        return $this->db->rowCount(); 
    }
}