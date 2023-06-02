<!DOCTYPE html>
<html>
<head>
<title>Tambah Pesanan</title>
</head>

<body>

<form action="" method= "post">
    Nama : <input type="text" name="nama"><br>
    Pesanan : <input type="text" name="pesanan"><br>
    <input type="radio" value="makanan" name="jenis">Makanan
    <input type="radio" value="minuman" name="jenis">Minuman<br>
    <input type="radio" value="tunai" name="pembayaran">Tunai
    <input type="radio" value="debit" name="pembayaran">Debit<br>
    Nomor Meja : <input type="int" name="no_meja"><br>
    <input type="submit" value="Submit" name="ok"><br>
    <a href="index.php">Home</a>
</form>
</body>

<?php
include_once 'connect.php';

if (isset($_POST['ok'])) {
    $nama = $_POST['nama'];
    $pesanan = $_POST['pesanan'];
    $jenis = $_POST['jenis'];
    $pembayaran = $_POST['pembayaran'];
    $no_meja = $_POST['no_meja'];


    $q = mysqli_query($koneksi, "INSERT INTO cafe_order VALUES ('','$nama','$pesanan','$jenis','$pembayaran','$no_meja')");

    if ($q){
        ?>
        <script>
            alert("Data Berhasil Ditambahkan");
            document.location = index.php;
        </script>
        <?php
    }
    else{
        ?>
        <script>
            alert("Data Gagal Ditambahkan");
            document.location = append.php;
        </script>
        <?php
    }
}
?>
</html>
