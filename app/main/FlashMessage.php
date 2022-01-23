<?php
class FlashMessage {
    public static function setflash($pesan,$aksi,$jenis)
    {
        $_SESSION['flash']= [
            'pesan'=>$pesan,
            'aksi' =>$aksi,
            'jenis'=>$jenis
        ];
    }
    public static function Flash()
    {
        if (isset($_SESSION['flash'])) {
            echo '<div class="alert alert-'.$_SESSION['flash']['jenis'].' alert-dismissible fade show" role="alert">Data
            <strong> '.$_SESSION['flash']['pesan'].'</strong> '.$_SESSION['flash']['aksi'].' 
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
          unset($_SESSION['flash']);
        }
    }
}