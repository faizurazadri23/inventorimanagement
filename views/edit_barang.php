<!DOCTYPE html>
<html>
<head> 
        <title>Web Inventory Barang</title> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/x-icon" href="../assets/images/logo.png">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head> 
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<body>

    <div class="container">
        <div class="row justify-content-md">
            <div class="col-md-auto">
      
                <nav class="navbar navbar-expand-lg navbar-light bg-light">

                    <a class="navbar-brand" href="index.php?page=home">Sistem Inventory Barang</a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                        <a class="nav-link" href="index.php?page=home">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="index.php?page=barang">Barang</a>
                        
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="index.php?page=supplier">Supplier</a>
                        
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="index.php?page=jenis">Jenis</a>
                        
                        </li>
                        
                        
                    </ul>

                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Cari" aria-label="Cari">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Cari</button>
                    </form>
                    


                </nav>
            
            </div>

        </div>

	

		<h1>Ubah Data Barang</h1>

		<div class="card">
			<div class="card-header bg-success text-white ">
				Ubah Data Barang <a href="index.php?page=barang" class="btn btn-sm btn-primary float-right">Lihat</a>
			</div>
			<div class="card-body">

				

            <form action="" method="post" role="form">
				<?php
				   include '../Controllers/BarangController.php';

                    $id = $_GET['id'];

					$crud = new Barang();

					//menampilkan barang berdasarkan id
					$row = $crud->get_by_id($id);
                    
				?>
					<div class="form-group">
					<label>Kode Barang</label>
						<input type="text" name="kode_barang" required="" maxlength="10" class="form-control" required value="<?= $row['kode_barang']; ?>">
					</div>

                    <div class="form-group">
						<label>Nama Barang</label>
						<input type="text" name="nama_barang" class="form-control" required value="<?= $row['nama_barang']; ?>">
					</div>

                    <div class="form-group">
						<label>Satuan</label>
						<input type="text" name="satuan" class="form-control" required value="<?= $row['satuan']; ?>">
					</div>

					
                    <div class="form-group">
                        <label for="sel1">Pilih Jenis Barang:</label>
                        <select class="form-control" id="sel1" name="jenis_barang">

						<?php
							include '../Controllers/JenisController.php'; //memanggil class Barang Controller

							$jenis_barang = new Jenis();

							$data_jenis_barang = $jenis_barang->readData();

							foreach($data_jenis_barang as $row_jenis_barang) {
							?>	
								<option value="<?php echo $row_jenis_barang['id']; ?>" <?php
								if ($row_jenis_barang['id'] == $row['id_jenis']) {
									echo 'selected="selected"';
								}
								?> > <?php echo $row_jenis_barang['nama_jenis']; ?></option>
							<?php
								
							}
						?>
						
						
						
                        </select>
                    </div> 

                    <div class="form-group">
                        <label for="sel1">Pilih Supplier Barang:</label>
                        <select class="form-control" id="sel1" name="supplier_barang">
						<?php
							include '../Controllers/SupplierController.php'; //memanggil class Barang Controller

							$supplier_barang = new Supplier();

							$data_supplier_barang = $supplier_barang->readData();

							foreach($data_supplier_barang as $row_supplier) {
								?>
								<option value="<?php echo $row_supplier['id']; ?>" <?php
								if ($row_supplier['id'] == $row['id_supplier']) {
									echo 'selected="selected"';
								}
								?> > <?php echo $row_supplier['nama_supplier']; ?></option>
							<?php
								
							}
					
						?>
                        </select>
                    </div>

					<?php
						
						$row = $crud->get_by_id($id);
						
					?>
					
                    <div class="form-group">
						<label>Harga</label>
						<input type="double" name="harga" class="form-control"  value="<?= $row['harga']; ?>" required >
					</div>

                    <div class="form-group">
						<label>Stok</label>
						<input type="number" name="stok" class="form-control" required value="<?= $row['stok']; ?>">
					</div>

                
					<button type="submit" class="btn btn-primary" name="submit" value="simpan">Simpan data</button>

                    <a class="btn btn-default" href="index.php?page=barang" role="button">Lihat data</a>

					
			</form>

            <?php
				
				//melakukan pengecekan jika button submit diklik maka akan menjalankan perintah simpan dibawah ini
				if (isset($_POST['submit'])) {
					$crud = new Barang();

					$hasil = $crud->updateData($_GET['id'], $_POST['kode_barang'],$_POST['nama_barang'], $_POST['satuan'], $_POST['jenis_barang'], $_POST['supplier_barang'],  $_POST['harga'], $_POST['stok']);

					if($hasil){
						echo "<script>alert('data berhasil diubah.');window.location='index.php?page=barang';</script>";
					}else{
						echo "<script>alert('data gagal disimpan.');</script>";
					}
					
				}
			?>
		</div>
		
	</div>
</body>
</html>