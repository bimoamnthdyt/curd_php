<?php
    include('lib/koneksi.php');
    $hasil=$con->query(" SELECT * FROM `barang` ");
    

    if (isset($_GET['info'])) {

        $info=$_GET['info'];
        if ($info=='hapus') {
            echo "data berhasil terhapus"; 
        }elseif ($info=="edit") {
            echo "data berhasil mengedit";
        }
    }
?>

<table  border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>Kode Produk</th>
        <th>Nama Produk</th>
        <th>Harga Produk</th>
        <th>Satuan</th>
        <th>Kategori</th>
        <th>Gambar Produk</th>
        <th>stok produk</th>
        <th>Action</th>
    </tr>
    <?php
        foreach($hasil as $data):?>
    <tr>
        <td><?php echo $data['kode_produk']; ?></td>
        <td><?php echo $data['nama_produk']; ?></td>
        <td><?php echo $data['harga_produk']; ?></td>
        <td><?php echo $data['satuan']; ?></td>
        <td><?php echo $data['kategori']; ?></td>
        <td><img  src="<?= $data['url_gambar'] ?>" style="width: 130px;" alt="gambar.png"></td>
        <?php $stok_awal = $data['stok_awal']; echo ($data['stok_awal'] < 5) ? "<td style='background:red; color:#fff'>$stok_awal</td>" : "<td>$stok_awal</td>"; ?>
        <td><a href="formeditbarang.php?key=<?php echo $data['kode_produk'];?>">edit</a> 
        | <a href="deletbarang.php?key=<?php echo $data['kode_produk'];?>">hapus</a></td>
    </tr>
    <?php endforeach; ?>
</table>
