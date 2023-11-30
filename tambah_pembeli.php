<?php
require 'functions.php';
$pembeli = query("SELECT * FROM pembeli");
if (isset($_POST['tambah'])) {
    if (tambah_pembeli($_POST) > 0) {
        header('location:data_pembeli.php');
    } else {
        header('location:data_pembeli.php');
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>tambah data supplier</h1>
    <form action="" method="post">
        <div>
            <label for="nama"> Nama Pembeli: </label>
            <input type="text" name="nama" id="nama" required>
            <div>
                <label for="harga">JK:</label>
                <input type="number" name="jk" id="jk" required>
            </div>
            <div>
                <label for="stok">No Telp:</label>
                <input type="number" name="no_telp" id="no_telp" required>
            </div>
            <div>
                <label for="stok">Alamat:</label>
                <input type="text" name="alamat" id="alamat" required>
            </div>
            <div>
                <label for="stok">Jumlah Transaksi:</label>
                <input type="number" name="jml_transaksi" id="jml_transaksi" required>
            </div>
        </div>
        <button type="submit" name="tambah">tambah data</button>
    </form>
</body>

</html>