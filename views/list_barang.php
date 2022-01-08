
	<div class="col-sm">
		<h1>Data Barang</h1>
		<div class="card">
			<div class="card-header bg-success text-white ">
				DATA Barang <a href="index.php?page=add_barang" class="btn btn-sm btn-primary float-right">Tambah</a>
			</div>
			<div class="card-body">
				<div class="table-responsive">
					<table class="table table-striped">
						<thead>
							<tr>
								<th>No</th>
								<th>Kode Barang</th>
								<th>Nama Barang</th>
								<th>Satuan</th>
								<th>Jenis Barang</th>
								<th>Supplier</th>
								<th>Harga</th>
								<th>Stok</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php
								include '../Controllers/BarangController.php'; //memanggil class Barang Controller

								$barang = new Barang;

								$data_barang = $barang->readData();

								

								$no = 1;//untuk pengurutan nomor

								//melakukan perulangan
								foreach($data_barang as $row) {
							?>	

						<tr>
							<td><?= $no; ?></td>
							<td><?= $row['kode_barang']; ?></td>
							<td><?= $row['nama_barang']; ?></td>
							<td><?= $row['satuan']; ?></td>
							<td><?= $row['nama_jenis']; ?></td>
							<td><?= $row['nama_supplier']; ?></td>
							<td><?= $row['harga']; ?></td>
							<td><?= $row['stok']; ?></td>
							<td>
									<a href="edit_barang.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-warning">Ubah</a>
									<a href="delete_barang.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('anda yakin ingin hapus?');">Hapus</a>
									
							</td>
						</tr>

							<?php $no++; } ?>
						</tbody>
					</table>
				</div>
			</div>

			
		</div>
	</div>
