<?php
include_once("../../../class/User.php");
include_once("../../../class/Peminjaman.php");

$user = new User;
$data_user = $user->find(2);

$peminjaman = new Peminjaman;
$data_peminjaman = $peminjaman->allPinjam();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Peminjam</title>
</head>
<body>
    <?php include("../../..//partials/sidebar_admin.php") ?>

    <div class="tambah">
        <a href="tambah.php">Tambah Anggota</a>
    </div>
    <div class="table">
        <table border="1">
            <tr>
                <th>No</th>
                <th>Nama Anggota</th>
                <th>Judul Buku</th>
                <th>Tanggal Peminjaman</th>
                <th>Tanggal Pengembalian</th>
                <th>kondisi Buku Saat Dipinjam</th>
                <th>kondisi Buku Saat Dikembalikan</th>
                <th>Denda</th>
            </tr>

            <?php foreach($data_peminjaman as $key => $b) {?> 
              <tr>
                <td><?= $key +1 ?></td>
                <td><?= $b["nama"] ?></td>
                <td><?= $b["judul"] ?></td>
                <td><?= $b["tanggal_peminjaman"] ?></td>
                <td><?= $b["tanggal_pengembalian"] ?></td>
                <td><?= $b["kondisi_buku_saat_dipinjam"] ?></td>
                <td><?= $b["kondisi_buku_saat_dikembalikan"] ?></td>
                <td><?= $b["denda"] ?></td>
              </tr>  
            <?php } ?>
        </table>
    </div>
</body>
</html>