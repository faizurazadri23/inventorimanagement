<?php				
	include '../Controllers/JenisController.php';

	$crud = new jenis();

	if(isset($_GET['id'])){
		$id_jenis = $_GET['id'];

		$result = $crud->deleteData($id_jenis);

		if($result){
			
			echo "<script>alert('Barang Berhasil dihapus.');window.location='index.php?page=jenis';</script>";
		}else{
			echo "<script>alert('data gagal dihapus.');</script>";
		}
	}
?>
