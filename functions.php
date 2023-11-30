<?php 
//function untuk koneksi db
function koneksi () {
    $conn = mysqli_connect ("localhost","root","","penjualan") ;
    return $conn ;
}

function query($sql) {
    $conn = koneksi();
    $result = mysqli_query ($conn, $sql) ;

    $rows = [];
    while ($row = mysqli_fetch_assoc ($result)){
        $rows [] = $row;
    }
    return $rows ;
}

function tambah_pembeli($data){
    $conn = koneksi();

    $nama = $data['nama'];
    $jk = $data['jk'];
    $no_telp = $data['no_telp'];
    $alamat = $data['alamat'];
    $jml_transaksi = $data['jml_transaksi'];

    $sql="INSERT INTO pembeli VALUES (null,'$nama', '$jk','$no_telp','$alamat', '$jml_transaksi')" ;

    mysqli_query($conn,$sql) ;

    return mysqli_affected_rows($conn) ;
}

function hapus_pembeli($id) {
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM pembeli WHERE id_pembeli = $id") ;
}

function ubah_pembeli ($data) {
    $conn = koneksi () ;

    $id = $data ['id'] ;
    $jk = $data ['jk'] ;
    $nama = $data ['nama'] ;
    $no_telp = $data ['no_telp'] ;
    $alamat = $data ['alamat'] ;
    $jumlah_transaksi = $data ['jumlah_transaksi'] ;

    $sql = "UPDATE pembeli SET nama_pembeli = '$nama',
                                no_telp = '$no_telp',
                                alamat = '$alamat',
                                jk = '$jk',
                                jumlah_transaksi = '$jumlah_transaksi'
                        WHERE id_pembeli = $id" ;
    mysqli_query($conn, $sql);
    return mysqli_affected_rows($conn) ;
}

?>