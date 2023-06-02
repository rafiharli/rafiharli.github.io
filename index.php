<!DOCTYPE html>
<html>

<head>
    <title>Database Pesanan Cafe</title>
</head>

<body>

<table border="5" cellpadding="10" style="border:5px solid Black;">
    <tr>
    <td><a href="add_data.php">Tambah Pesanan</a></td>
    </tr>
</table>

<table border="5" cellpadding="15" style="border:5px solid Black;">
        <tr>
            <td>No</td>
            <td>Nama</td>
            <td>Pesanan</td>
            <td>Jenis Pesanan</td>
            <td>Pembayaran</td>
            <td>Nomor Meja</td>
            <td>Edit</td>
            <td>Delete</td>
        </tr>

        <?php
            include_once 'connect.php';
            $no = 1;
            $data = mysqli_query($koneksi, "SELECT * FROM cafe_order");
            while ($d = mysqli_fetch_assoc($data)){
            ?>

        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $d['nama'] ?></td>
            <td><?php echo $d['pesanan'] ?></td>
            <td><?php echo $d['jenis'] ?></td>
            <td><?php echo $d['pembayaran'] ?></td>
            <td><?php echo $d['no_meja'] ?></td>
            <td>
                <a href="edit_data.php?id=<?php echo $d['no_pesanan']; ?>">Edit</a>
            </td>
            <td>
                <a href="delete_data.php?id=<?php echo $d['no_pesanan']; ?>">Delete</a>
            </td>
        </tr>

        <?php
            }
            ?>
</table>

</body>
</html>