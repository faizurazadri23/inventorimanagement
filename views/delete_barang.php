<?php				
	include '../Controllers/BarangController.php';

	$crud = new Barang();

	if(isset($_GET['id'])){
		$id_barang = $_GET['id']; //menampung nim

		$result = $crud->deleteData($id_barang);

		if($result){
			//alert dan redirect ke index.php
			echo "<script>alert('Barang Berhasil dihapus.');window.location='index.php?page=barang';</script>";
		}else{
			echo "<script>alert('data gagal dihapus.');</script>";
		}
	}
?>
