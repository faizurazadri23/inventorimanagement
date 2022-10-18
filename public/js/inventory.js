$(function(){
    $('.tombolTambahBarang').on('click',function(){
        $('#formBarangLabel').html('Tambah Data Barang');
        $('.modal-footer button[type=submit]').html('Simpan');

    });

    $('.modalUbahBarang').on('click',function(){
        $('#formBarangLabel').html('Ubah Data Barang');
        $('.modal-footer button[type=submit]').html('Update');
        $('.modal-body form').attr('action','http://localhost/inventorimanagement/public/barang/ubah')

        const id=$(this).data('id');

        $.ajax({
            url:'http://localhost/inventorimanagement/public/barang/getubah',
            data:{id : id},
            method:'post',
            dataType:'json',
            success:function(data) {
                $('#kode_barang').val(data.kode_barang);
                $('#nama_barang').val(data.nama_barang);
                $('#satuan').val(data.satuan);
                $('#id_jenis').val(data.id_jenis);
                $('#id_supplier').val(data.id_supplier);
                $('#harga').val(data.harga);
                $('#stok').val(data.stok);
                $('#id').val(data.id); 
            }, error: function(){
                alert("Terjadi kesalahan");
            }
        });
    });

    $('.tombolTambah').on('click',function(){
        $('#formJenisBarangLabel').html('Tambah Data Jenis Barang');
        $('.modal-footer button[type=submit]').html('Simpan');

    });

    $('.modalUbahJenis').on('click',function(){
        $('#formJenisBarangLabel').html('Ubah Jenis Barang');
        $('.modal-footer button[type=submit]').html('Update');
        $('.modal-body form').attr('action','http://localhost/inventorimanagement/public/jenis/ubah')

        const id=$(this).data('id');

        $.ajax({
            url:'http://localhost/inventorimanagement/public/jenis/getubah',
            data:{id : id},
            method:'post',
            dataType:'json',
            success:function(data) {
                $('#nama_jenis').val(data.nama_jenis);
                $('#keterangan').val(data.keterangan);
                $('#id').val(data.id);
                // console.log(data);
            }, error: function(){
                alert("Terjadi kesalahan");
            }
        });
    });

    //Untuk Supplier
    $('.tombolTambahSupplier').on('click',function(){
        $('#formSupplierLabel').html('Tambah Data Supplier Barang');
        $('.modal-footer button[type=submit]').html('Simpan');

    });

    $('.modalUbahSupplier').on('click',function(){
        $('#formSupplierLabel').html('Ubah Supplier Barang');
        $('.modal-footer button[type=submit]').html('Update');
        $('.modal-body form').attr('action','http://localhost/inventorimanagement/public/supplier/ubah')

        const id=$(this).data('id');

        $.ajax({
            url:'http://localhost/inventorimanagement/public/supplier/getubah',
            data:{id : id},
            method:'post',
            dataType:'json',
            success:function(data) {
                $('#nama_supplier').val(data.nama_supplier);
                $('#notelp').val(data.notelp);
                $('#email').val(data.email);
                $('#alamat').val(data.alamat);
                $('#id').val(data.id);
                // console.log(data);
            }, error: function(){
                alert("Terjadi kesalahan");
            }
        });
    });

    
});
