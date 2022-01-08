
	<div class="col-sm">
		<h1>Ubah Data Supplier</h1>
		<div class="card">
			<div class="card-header bg-success text-white ">
				Tambah Data Supplier <a href="supplier.php?page=jenis" class="btn btn-sm btn-primary float-right">Lihat</a>
			</div>
			<div class="card-body">
            <form action="" method="post" role="form">
					<div class="form-group">
						<label>Jenis Barang</label>
						<input type="text" name="jenis_barang" class="form-control">
					</div>

                    <div class="form-group">
						<label>Keterangan</label>
						<input type="text" name="keterangan" class="form-control">
					</div>

					<button type="submit" class="btn btn-primary" name="submit" value="simpan">Simpan data</button>

                    <a class="btn btn-default" href="supplier.php?page=jenis" role="button">Lihat data</a>
				</form>

                <?php
				   include '../Controllers/JenisController.php';
				
				//melakukan pengecekan jika button submit diklik maka akan menjalankan perintah simpan dibawah ini
				if (isset($_POST['submit'])) {
					$crud = new Jenis();

					$hasil = $crud->updateData($_GET['id'], $_POST['jenis_barang'],$_POST['keterangan']);

					if($hasil){
						echo "<script>alert('data berhasil diubah.');window.location='list_jenis.php?page=jenis';</script>";
					}else{
						echo "<script>alert('data gagal disimpan.');</script>";
					}
					
				}
				?>
			</div>

			
		</div>
	</div>
