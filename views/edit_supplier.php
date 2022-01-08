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
		
	<div class="col-md-auto">
		<h1>Ubah Data Supplier Barang</h1>
		<div class="card">
			<div class="card-header bg-success text-white ">
				Ubah Data Supplier Barang <a href="supplier.php?page=supplier" class="btn btn-sm btn-primary float-right">Lihat</a>
			</div>
			<div class="card-body">

				<?php
				   include '../Controllers/SupplierController.php';

                    $id = $_GET['id'];

					$crud = new Supplier();

					//menampilkan barang berdasarkan id
					$row = $crud->get_by_id($id);
                    
				?>

            <form action="" method="post" role="form">
					
					<div class="form-group">
						<label>Nama Supplier</label>
						<input type="text" name="nama_supplier" class="form-control" value="<?= $row['nama_supplier']; ?>">
					</div>

                    <div class="form-group">
						<label>No. Telp</label>
						<input type="text" name="notelp" class="form-control" value="<?= $row['notelp']; ?>">
					</div>

                    <div class="form-group">
						<label>Email</label>
						<input type="text" name="email" class="form-control" value="<?= $row['email']; ?>">
					</div>

                    <div class="form-group">
						<label>Alamat</label>
						<input type="text" name="alamat" class="form-control" value="<?= $row['alamat']; ?>">
					</div>

                
					<button type="submit" class="btn btn-primary" name="submit" value="simpan">Simpan data</button>

                    <a class="btn btn-default" href="index.php?page=jenis" role="button">Lihat data</a>
				</form>

                <?php
				   
				
				//melakukan pengecekan jika button submit diklik maka akan menjalankan perintah simpan dibawah ini
				if (isset($_POST['submit'])) {
					$crud = new Supplier();

					$hasil = $crud->updateData($_GET['id'], $_POST['nama_supplier'],$_POST['notelp'], $_POST['email'], $_POST['alamat']);

					if($hasil){
						echo "<script>alert('data berhasil diubah.');window.location='index.php?page=supplier';</script>";
					}else{
						echo "<script>alert('data gagal disimpan.');</script>";
					}
					
				}
				?>
			</div>

			
		</div>
	
	</div>
</body>
</html>