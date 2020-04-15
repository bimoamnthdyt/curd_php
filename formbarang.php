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
<h3>Form input master dan stock data barang</h3>

<form name="formimputbarang" action="prosessimpanbarang.php" method="POST">

    <div class="container1">
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <td>Kode produk</td>
                <td><input type="text" disabled value="auto" name="kode_produk" id="nampro"></td></td>
            </tr>
            <tr>
                <td>Nama produk</td>
                <td><input type="text" name="nama_produk" id="nampro"></td>
            </tr>
            <tr>
                <td>Harga produk</td>
                <td><input type="number" name="harga" placeholder="Rp" id="harpro"></td>
            </tr>
            <tr>
                <td>Satuan</td>
                <td><select name="satuan" id="sat">
                    <option value="#">pilih..</option>
                    <option value="kilogram">kilogram</option>
                    <option value="liter">Liter</option>
                    <option value="gram">Gram</option>
                    </select></td>
            </tr>
            <tr>
                <td>Kategori</td>
                <td><select name="kategori" id="katpro">
                    <option value="#">pilih..</option>
                    <option value="padat">padat</option>
                    <option value="cair">cair</option>
                    <option value="gas">gas</option>
                </select></td>
                </tr>
                <tr>
                    <td>URL gambar</td>
                    <td><input type="text" name="url_gambar" id="gampro"></td>
                </tr>
                <tr>
                    <td>stok awal</td>
                    <td><input type="number" name="stok_awal" id="stopro"></td>
                </tr>
            </table>
        <br>
        <input type="submit" name="btnsimpan" value="simpan">
    </div>
</form>
</body>
</html>