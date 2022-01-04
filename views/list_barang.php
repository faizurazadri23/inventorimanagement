
	<div class="col-sm">
		<h1>Data Barang</h1>
		<div class="card">
			<div class="card-header bg-success text-white ">
				DATA Barang <a href="index.php?page=add_barang" class="btn btn-sm btn-primary float-right">Tambah</a>
			</div>
			<div class="card-body">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>No</th>
							<th>Kode Barang</th>
							<th>Nama Barang</th>
							<th>Satuan</th>
							<th>ID Jenis</th>
                            <th>ID Supplier</th>
                            <th>Harga</th>
                            <th>Stok</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php
							include '../Controllers/BarangController.php'; //memanggil file koneksi

							$barang = new Barang;

							$data_barang = $barang->readData();

							//$data_mhs = mysqli_query($koneksi, "select * from mahasiswa") or die(mysqli_error($koneksi));
							//script untuk menampilkan data mahasiswa

							$no = 1;//untuk pengurutan nomor

							//melakukan perulangan
							foreach($data_barang as $row) {
						?>	

					<tr>
						<td><?= $no; ?></td>
						<td><?= $row['kode_barang']; //untuk menampilkan nim ?></td>
						<td><?= $row['nama_barang']; ?></td>
						<td><?= $row['satuan']; ?></td>
                        <td><?= $row['id_jenis']; ?></td>
                        <td><?= $row['id_supplier']; ?></td>
                        <td><?= $row['harga']; ?></td>
                        <td><?= $row['stok']; ?></td>
						<td>
								<a href="edit.php?nim=<?= $row['nim']; ?>" class="btn btn-sm btn-warning">Edit</a>
								<a href="hapus.php?nim=<?= $row['nim']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('anda yakin ingin hapus?');">Hapus</a>
								
						</td>
					</tr>

						<?php $no++; } ?>
					</tbody>
				</table>
			</div>

			
		</div>
	</div>
