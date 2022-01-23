<?php

class Jenis extends Controller{


    public function index()
    {
        $data['judul']='Daftar Jenis';
        $data['jenis']=$this->model('JenisModel')->getAllJenis();
        $this->view('templates/header',$data);
        $this->view('templates/sidebar');
        $this->view('jenis/index',$data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if ($this->model('JenisModel')->tambahJenis($_POST)>0) {
            FlashMessage::setflash('Berhasil','disimpan','primary');
            header('location:'.BASEURL. '/jenis');
            exit;
        }
        else {
            FlashMessage::setflash('Gagal','disimpan','danger');
            header('location:'.BASEURL. '/jenis');
            exit;
        }
        
    }


    public function hapus($id)
    {
        if ($this->model('JenisModel')->hapusJenis($id)>0) {
            FlashMessage::setflash('Berhasil','dihapus','success');
            header('location:'.BASEURL. '/jenis');
            exit;
        }
        else {
            FlashMessage::setflash('Gagal','dihapus','danger');
            header('location:'.BASEURL. '/jenis');
            exit;
        }
        
    }
    public function getUbah()
    {
        echo json_encode($this->model('JenisModel')->getJenisById($_POST['id']));
       
    }
    public function Ubah()
    {
        {
            if ($this->model('JenisModel')->ubahJenis($_POST)>0) {
                FlashMessage::setflash('Berhasil','diubah','primary');
                header('location:'.BASEURL. '/jenis');
                exit;
            }
            else {
                FlashMessage::setflash('Gagal','diubah','danger');
                header('location:'.BASEURL. '/jenis');
                exit;
            }
            
        }       
    }
}

?>