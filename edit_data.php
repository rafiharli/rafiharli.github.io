
<?php
include_once 'connect.php';

$id = $_GET['id'];
$query = mysqli_query($koneksi,"SELECT * FROM cafe_order WHERE no_pesanan = $id");
$q = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html>
<head>
<title>Edit Pesanan</title>
</head>

<body>
<form action="" method= "post">
    Nama : <input type="text" name="nama"><br>
    Pesanan : <input type="text" name="pesanan"><br>
    Jenis Pesanan: <input type="radio" value="makanan" name="jenis">Makanan
    <input type="radio" value="minuman" name="jenis">Minuman<br>
    Pembayaran: <input type="radio" value="tunai" name="pembayaran">Tunai
    <input type="radio" value="debit" name="pembayaran">Debit<br>
    Nomor Meja : <input type="int" name="no_meja"><br>
    <input type="submit" value="Submit" name="ok"><br>
    <a href="index2.php">Home</a>
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

    $q = mysqli_query($koneksi, "UPDATE cafe_order SET nama = '$nama', pesanan = '$pesanan', jenis = '$jenis', pembayaran = '$pembayaran', no_meja = '$no_meja' WHERE no_pesanan = $id");

    if ($q){
        ?>
        <script>
            alert("Data Berhasil Diubah");
            document.location = index.php;
        </script>
        <?php
    }
    else{
        ?>
        <script>
            alert("Data Gagal Diubah");
            document.location = append.php;
        </script>
        <?php
    }
}
?>
</html>
