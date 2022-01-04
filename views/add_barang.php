
	<div class="col-sm">
		<h1>Tambah Data Barang</h1>
		<div class="card">
			<div class="card-header bg-success text-white ">
				Tambah Data Barang <a href="index.php?page=barang" class="btn btn-sm btn-primary float-right">Lihat</a>
			</div>
			<div class="card-body">
            <form action="" method="post" role="form">
					<div class="form-group">
						<label>Kode Barang</label>
						<input type="number" name="kode_barang" required="" maxlength="10" class="form-control">
					</div>
					<div class="form-group">
						<label>Nama Barang</label>
						<input type="text" name="nama_barang" class="form-control">
					</div>

                    <div class="form-group">
						<label>Satuan</label>
						<input type="text" name="satuan" class="form-control">
					</div>

                    <div class="form-group">
                        <label for="sel1">Pilih Jenis Barang:</label>
                        <select class="form-control" id="sel1" name="gender">
                            <!-- <option value="L">Laki-Laki</option>
                            <option value="P">Perempuan</option> -->
                        </select>
                    </div> 

                    <div class="form-group">
                        <label for="sel1">Pilih Supplier Barang:</label>
                        <select class="form-control" id="sel1" name="gender">
                            <!-- <option value="L">Laki-Laki</option>
                            <option value="P">Perempuan</option> -->
                        </select>
                    </div> 

                    <div class="form-group">
						<label>Harga</label>
						<input type="number" name="harga" class="form-control">
					</div>

                    <div class="form-group">
						<label>Stok</label>
						<input type="number" name="stok" class="form-control">
					</div>

					<button type="submit" class="btn btn-primary" name="submit" value="simpan">Simpan data</button>

                    <a class="btn btn-default" href="index.php?page=barang" role="button">Lihat data</a>
				</form>
			</div>

			
		</div>
	</div>
