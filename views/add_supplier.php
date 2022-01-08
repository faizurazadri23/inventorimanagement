
	<div class="col-sm">
		<h1>Tambah Data Supplier</h1>
		<div class="card">
			<div class="card-header bg-success text-white ">
				Tambah Data Supplier <a href="index.php?page=supplier" class="btn btn-sm btn-primary float-right">Lihat</a>
			</div>
			<div class="card-body">
            <form action="" method="post" role="form">
					<div class="form-group">
						<label>Nama Supplier</label>
						<input type="text" name="nama_supplier" class="form-control" required>
					</div>

                    <div class="form-group">
						<label>No. Telp</label>
						<input type="text" name="notelp" class="form-control" required>
					</div>
                    <div class="form-group">
						<label>Email</label>
						<input type="text" name="email" class="form-control" required>
					</div>
                    <div class="form-group">
						<label>Alamat</label>
						<input type="text" name="alamat" class="form-control" required>
					</div>

					<button type="submit" class="btn btn-primary" name="submit" value="simpan">Simpan data</button>

                    <a class="btn btn-default" href="index.php?page=supplier" role="button">Lihat data</a>
				</form>

                <?php
				   include '../Controllers/SupplierController.php';
				
				//melakukan pengecekan jika button submit diklik maka akan menjalankan perintah simpan dibawah ini
				if (isset($_POST['submit'])) {
					$crud = new supplier();

					$hasil = $crud->createData($_POST['nama_supplier'], $_POST['notelp'], $_POST['email'], $_POST['alamat']);

					if($hasil){
						echo "<script>alert('data berhasil disimpan.');window.location='index.php?page=supplier';</script>";
					}else{
						echo "<script>alert('data gagal disimpan.');</script>";
					}
					
				}
				?>
			</div>

			
		</div>
	</div>
