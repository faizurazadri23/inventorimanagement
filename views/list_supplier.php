
	<div class="col-sm">
		<h1>Data Supplier</h1>
		<div class="card">
			<div class="card-header bg-success text-white ">
				DATA Supplier <a href="index.php?page=add_supplier" class="btn btn-sm btn-primary float-right">Tambah</a>
			</div>
			<div class="card-body">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama Supplier</th>
							<th>No Telp</th>
							<th>Email</th>
                            <th>Alamat</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php
							include '../Controllers/SupplierController.php'; //memanggil class Barang Controller

							$supplier = new Supplier;

							$data_supplier = $supplier->readData();

							

							$no = 1;//untuk pengurutan nomor

							//melakukan perulangan
							foreach($data_supplier as $row) {
						?>	

					<tr>
						<td><?= $no; ?></td>
						<td><?= $row['nama_supplier']; ?></td>
						<td><?= $row['notelp']; ?></td>
                        <td><?= $row['email']; ?></td>
                        <td><?= $row['alamat']; ?></td>
						<td>
								<a href="index.php?page=edit_supplier" . ?id=<?= $row['id']; ?> class="btn btn-sm btn-warning">Ubah</a>
								<a href="delete_supplier.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('anda yakin ingin hapus?');">Hapus</a>
								
						</td>
					</tr>

						<?php $no++; } ?>
					</tbody>
				</table>
			</div>

			
		</div>
	</div>
