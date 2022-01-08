
	<div class="col-sm">
		<h1>Tambah Data Jenis Barang</h1>
		<div class="card">
			<div class="card-header bg-success text-white ">
				Tambah Data Jenis Barang <a href="index.php?page=jenis" class="btn btn-sm btn-primary float-right">Lihat</a>
			</div>
			<div class="card-body">
            <form action="" method="post" role="form">
					<div class="form-group">
						<label>Jenis Barang</label>
						<input type="text" name="jenis_barang" class="form-control" required>
					</div>

                    <div class="form-group">
						<label>Keterangan</label>
						<input type="text" name="keterangan" class="form-control" required>
					</div>

					<button type="submit" class="btn btn-primary" name="submit" value="simpan">Simpan data</button>

                    <a class="btn btn-default" href="index.php?page=jenis" role="button">Lihat data</a>
				</form>

                <?php
				   include '../Controllers/JenisController.php';
				
				//melakukan pengecekan jika button submit diklik maka akan menjalankan perintah simpan dibawah ini
				if (isset($_POST['submit'])) {
					$crud = new jenis();

					$hasil = $crud->createData($_POST['jenis_barang'], $_POST['keterangan']);

					if($hasil){
						echo "<script>alert('data berhasil disimpan.');window.location='index.php?page=jenis';</script>";
					}else{
						echo "<script>alert('data gagal disimpan.');</script>";
					}
					
				}
				?>
			</div>

			
		</div>
	</div>
