<?php
require 'functions.php';
if (isset($_POST['ubah'])) {
    if (ubah_pembeli($_POST) > 0) {
        header('location:data_pembeli.php');
    } else {
        header('location:data_pembeli.php');
    }
}

$id = isset($_GET['id']) ? $_GET['id'] : 0;
$pembeli = query("SELECT * FROM pembeli WHERE id_pembeli =  $id")[0];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>ubah data pembeli</h1>
    <form action="" method="post">
        <input type="hidden" name="id" value="<?php echo $pembeli['id_pembeli']; ?>">
        <div>
            <label for="nama"> Nama pembeli: </label>
            <input type="text" name="nama" id="nama" value="<?php echo $pembeli["nama_pembeli"]; ?>" required>
            <div>
                <label for="harga">JK:</label>
                <input type="number" name="jk" id="jk" value="<?php echo $pembeli["jk"]; ?>" required>
            </div>
            <div>
                <label for="stok">no telp:</label>
                <input type="number" name="no_telp" id="alamat" value="<?php echo $pembeli["no_telp"]; ?>" required>
            </div>
            <div>
                <label for="stok">Alamat:</label>
                <input type="text" name="alamat" id="alamat" value="<?php echo $pembeli["alamat"]; ?>" required>
            </div>
            <div>
                <label for="stok">Jumlah Transaksi:</label>
                <input type="text" name="jumlah_transaksi" id="jumlah_transaksi" value="<?php echo $pembeli["jumlah_transaksi"]; ?>" required>
            </div>
        </div>
        <button type="submit" name="ubah">ubah data</button>
    </form>
</body>

</html>