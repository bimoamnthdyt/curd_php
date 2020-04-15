<?php
    include('lib/koneksi.php');
    $key=$_GET['key'];
    $hasil=$con->query("DELETE FROM `barang` WHERE `kode_produk`=$key ");
    if ($hasil==TRUE) {
        header("location:databarang.php?info=hapus ");
    }else{
        echo "data gagal dihapus";
    }
    
?>