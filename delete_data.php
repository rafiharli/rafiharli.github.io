<!DOCTYPE html>
<html>
    
<?php
include_once 'connect.php';

$id = $_GET['id'];
$q = mysqli_query($koneksi,"DELETE FROM cafe_order WHERE no_pesanan = $id");

if ($q){
    ?>
    <script>
        alert("Data Berhasil Dihapus");
        document.location = index.php;
    </script>
    <?php
}

else{
    ?>
    <script>
        alert("Data Gagal Dihapus");
        document.location = append.php;
    </script>
    <?php
}

?>

<a href="index.php">Home</a>

</html>