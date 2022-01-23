
    <h2>Daftar Barang</h2>
<div class="row">
    <div class="col-6">
    <?php FlashMessage::Flash(); ?>
    </div>
</div>

<button type="button" class="btn btn-primary tombolTambahBarang" data-bs-toggle="modal" data-bs-target="#formBarang">
Tambah data
</button>
<div class="container">
<div class="row mt-3">
<div class="table-responsive-sm">
<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Kode</th>
            <th>Nama</th>
            <th>Satuan</th>
            <th>Jenis</th>
            <th>Supplier</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
    <?php 
        $no=1;
        foreach ($data['barang'] as $mhs) : ?>
            <tr>
                <td><?= $no; ?></td>
                <td><?= $mhs['kode_barang']; ?></td>
                <td><?= $mhs['nama_barang']; ?></td>
                <td><?= $mhs['satuan']; ?></td>
                <td><?= $mhs['nama_jenis']; ?></td>
                <td><?= $mhs['nama_supplier']; ?></td>
                <td><?= "Rp " . number_format($mhs['harga'],2,',','.'); ?></td>
                <td><?= $mhs['stok']; ?></td>
                
                <td>
                    <a href="<?= BASEURL;?>/barang/hapus/<?= $mhs['id'] ?>" onclick="return confirm('Yakin akan menghapus data?')"><span data-feather='trash'></span>Hapus</a> | 
                    <a href="<?= BASEURL;?>/barang/ubah/<?= $mhs['id'] ?>" data-bs-toggle="modal" data-bs-target="#formBarang" class="modalUbahBarang" data-id="<?= $mhs['id']?>"><span data-feather='edit'></span>Edit</a>
                </td>
            </tr>
        

    <?php $no++; endforeach;?>
    </tbody>
</table>
</div>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="formBarang" tabindex="-1" aria-labelledby="formBarangLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formBarangLabel">Tambah data Barang</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?= BASEURL ?>/barang/tambah">
        <div class="row mb-3">
            <label for="inputKode" class="col-sm-2 col-form-label">Kode</label>
            <div class="col-sm-8">
            <input type="hidden" class="form-control" id="id" name="id">
            <input type="text" class="form-control" id="kode_barang" name="kode_barang" required>
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputNama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-8">
            <input type="text" class="form-control" id="nama_barang" name="nama_barang" required>
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputSatuan" class="col-sm-2 col-form-label">Satuan</label>
            <div class="col-sm-8">
            <input type="text" class="form-control" id="satuan" name="satuan" required>
            </div>
        </div>

        <div class="row mb-3">
            <label for="inputJenis" class="col-sm-2 col-form-label">Jenis Barang</label>
            <div class="col-sm-8">

            <select class="form-control" id="sel1" name="id_jenis">

              <?php

                foreach($data['jenis'] as $row) {
                  echo "<option value=".$row['id']. ">" .$row['nama_jenis']. "</option>";
                }
              ?>
           
            </select>
            </div>
        </div>

        <div class="row mb-3">
            <label for="inputSupplier" class="col-sm-2 col-form-label">Supplier Barang</label>
            <div class="col-sm-8">

            <select class="form-control" id="sel1" name="id_supplier">

              <?php

                foreach($data['supplier'] as $row) {
                  echo "<option value=".$row['id']. ">" .$row['nama_supplier']. "</option>";
                }
              ?>
           
            </select>
            </div>
        </div>
        

        <div class="row mb-3">
            <label for="inputHarga" class="col-sm-2 col-form-label">Harga</label>
            <div class="col-sm-8">
            <input type="number" class="form-control" id="harga" name="harga" required>
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputStok" class="col-sm-2 col-form-label">Stok</label>
            <div class="col-sm-8">
            <input type="number" class="form-control" id="stok" name="stok" required>
            </div>
        </div>
      
        
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
        </form>
      </div>
      
    </div>
  </div>
</div>