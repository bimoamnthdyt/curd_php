<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


<style>
    .container1{
        padding:40px;
        margin: 10px;
    }

</style>

</head>
<body>

<?php 
    include('lib/koneksi.php');
    $primary=$_GET['key'];
    $hasil=$con->query(" SELECT * FROM `barang`WHERE `kode_produk`=$primary ");
    foreach($hasil as $data){
        
?>

<h3>Form edit data barang</h3>

<form name="formeditebarang" action="proseseditbarang.php" method="POST">

    <div class="container1">
        <table border="1" cellpadding="10" cellspacing="0">
            <!-- <tr>
                <td>Kode produk</td>
                <td><input type="text" disabled value="auto" value="<?php echo $data['kode_produk'];?>" name="kode_produk"></td></td>
            </tr> -->
            <tr>
                <td>Nama produk <input type="hidden" name="kode_produk" value="<?php echo $data['kode_produk'];?>" ></td>
                <td><input type="text" name="nama_produk" id="nampro" value="<?php echo $data['nama_produk'];?>" ></td>
            </tr>
            <tr>
                <td>Harga produk</td>
                <td><input type="number" name="harga" placeholder="Rp" id="harpro" value="<?php echo $data['harga_produk'];?>"></td>
            </tr>
            <tr>
                <td value="">Satuan</td>
                <td><select name="satuan">
                    <option value="#">pilih..</option>
                    <option <?php if($data['satuan']=="kilogram"){echo "selected=selected";}?> value="kilogram">Kilogram</option>
                    <option <?php if($data['satuan']=="liter"){echo "selected=selected";} ?> value="liter">Liter</option>
                    <option <?php if($data['satuan']=="gram"){echo "selected=selected";} ?> value="gram">Gram</option>
                    </select></td>
            </tr>
            <tr>
                <td>Kategori</td>
                <td><select name="kategori" >
                    <option value="#">pilih..</option>
                    <option <?php if($data['kategori']=="padat"){echo "selected=selected";}?> value="padat">padat</option>
                    <option <?php if($data['kategori']=="cair"){echo "selected=selected";}?> value="cair">cair</option>
                    <option <?php if($data['kategori']=="gas"){echo "selected=selected";}?> value="gas">gas</option>
                </select></td>
                </tr>
                <tr>
                    <td>URL gambar</td>
                    <td><input type="text" name="url_gambar" value="<?php echo $data['url_gambar'];?>" ></td>
                </tr>
                <tr>
                    <td>stok awal</td>
                    <td><input type="number" name="stok_awal" value="<?php echo $data['stok_awal'];?>"></td>
                </tr>
            </table>
        <br>
        <input type="submit" name="btnsimpan" value="simpan">
    </div>
</form>
    <?php } ?>
</body>
</html>