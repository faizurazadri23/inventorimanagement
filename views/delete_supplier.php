<?php				
	include '../Controllers/SupplierController.php';

	$crud = new supplier();

	if(isset($_GET['id'])){
		$id_supplier = $_GET['id'];

		$result = $crud->deleteData($id_supplier);

		if($result){
			
			echo "<script>alert('Barang Berhasil dihapus.');window.location='index.php?page=supplier';</script>";
		}else{
			echo "<script>alert('data gagal dihapus.');</script>";
		}
	}
?>
