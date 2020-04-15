<?php
    include('lib/koneksi.php');

    // $kode_produk=$_POST['kode_produk'];
    $nama_produk=$_POST['nama_produk'];
    $harga_produk=$_POST['harga'];
    $satuan=$_POST['satuan'];
    $kategori=$_POST['kategori'];
    $url_gambar=$_POST['url_gambar'];
    $stok=$_POST['stok_awal'];

    $result = $con->exec("INSERT INTO `barang` (`kode_produk`, `nama_produk`, `harga_produk`, `satuan`, `kategori`, `url_gambar`, `stok_awal`) VALUES
     (null, '$nama_produk', '$harga_produk', '$satuan', '$kategori', '$url_gambar', '$stok')");

    echo $result;

    if ($result==TRUE) {
        echo "data disimpan ke database";
        header("location:databarang.php");
    }else{
        echo "gagal disimpan ke database";
    }
?>