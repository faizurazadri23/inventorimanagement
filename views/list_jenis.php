
	<div class="col-sm">
		<h1>Data Jenis Barang</h1>
		<div class="card">
			<div class="card-header bg-success text-white ">
				Data Jenis Barang <a href="index.php?page=add_jenis" class="btn btn-sm btn-primary float-right">Tambah</a>
			</div>
			<div class="card-body">
				<div class="table-responsive">
				<table class="table table-striped">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama Jenis</th>
							<th>Keterangan</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php
							include '../Controllers/JenisController.php'; //memanggil class Barang Controller

							$jenis = new Jenis;

							$data_jenis = $jenis->readData();

							

							$no = 1;//untuk pengurutan nomor

							//melakukan perulangan
							foreach($data_jenis as $row) {
						?>	

					<tr>
						<td><?= $no; ?></td>
						<td><?= $row['nama_jenis']; ?></td>
						<td><?= $row['keterangan']; ?></td>
                       
						<td>
								<a href="edit_jenis.php?id_jenis=<?= $row['id']; ?>" class="btn btn-sm btn-warning">Ubah</a>
								<a href="delete_jenis.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('anda yakin ingin hapus?');">Hapus</a>
								
						</td>
					</tr>

						<?php $no++; } ?>
					</tbody>
				</table>
				</div>
			</div>

			
		</div>
	</div>
