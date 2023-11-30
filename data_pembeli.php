<?php
//untuk akses fungsi di file functions.php
require 'functions.php';
$pembeli = query("SELECT * FROM pembeli");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <h1>Data pembeli</h1>
    <div>
        <button type="button" class="btn btn-info"><a href="tambah_pembeli.php">Tambah</a></button>
    </div>
    <table class="table table-striped table-hover">
        <tr>
            <th>no</th>
            <th>id_pembeli</th>
            <th>nama_pembeli</th>
            <th>jumlah pembeli</th>
            <th>no_telp</th>
            <th>alamat</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($pembeli as $pemb) { ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $pemb['id_pembeli']; ?></td>
                <td><?= $pemb['nama_pembeli']; ?></td>
                <td><?= $pemb['jk']; ?></td>
                <td><?= $pemb['no_telp']; ?></td>
                <td><?= $pemb['alamat']; ?></td>
                <td>
                    <button type="button" class="btn btn-primary btn-lg"><a href="ubah_pembeli.php?id=<?php echo $pemb['id_pembeli']; ?>">Edit</a></button>
                    <button type="button" class="btn btn-secondary btn-lg"><a href="hapus_pembeli.php?id=<?php echo $pemb['id_pembeli']; ?>">Hapus</a></button>
                </td>
            </tr>
            <?php $i++; ?>
        <?php } ?>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>