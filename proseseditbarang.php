<?php 
    include('lib/koneksi.php');
    $primary=$_POST['kode_produk'];


    $nama_produk=$_POST['nama_produk'];
    $harga_produk=$_POST['harga'];
    $satuan=$_POST['satuan'];
    $kategori=$_POST['kategori'];
    $url_gambar=$_POST['url_gambar'];
    $stok_awal=$_POST['stok_awal'];

    $hasil=$con->exec("UPDATE `barang` SET `nama_produk` = '$nama_produk',`harga_produk` = '$harga_produk', `satuan` = '$satuan', `kategori` = '$kategori', `url_gambar` = '$url_gambar',`stok_awal` = '$stok_awal' WHERE `barang`.`kode_produk` = $primary ");
    
    if ($hasil==TRUE) {
        header('location:databarang.php?info=edit');
    }else{
        echo "gagal mengubah";
    }
?>


