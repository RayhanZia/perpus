<?php
include_once("../class/User.php");
include_once("../class/Peminjaman.php");
session_start();

$user = new User;
$data_user = $user->find($_SESSION["id"]);

$peminjaman = new Peminjaman;
$data_peminjaman = $peminjaman->find($_SESSION["id"]);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include("../partials/t_script_js.php") ?>
    <title>Riwayat Peminjaman</title>
</head>

<body>
    <?php include("../partials/sidebar_user.php") ?>
    <h4>Pinjam Buku</h4>
    <div class="tambah">
        <a href="form_peminjaman.php">Pinjam</a>
    </div>
    <div class="table">
        <h4>Riwayat Peminjaman</h4>
        <table id="jquery-tab">
            <thead>
                <tr>
                    <th>No</th>
                    <!-- <th>Nama Anggota</th> -->
                    <th>Judul Buku</th>
                    <th>Tanggal Peminjaman</th>
                    <!-- <th>Tanggal Pengembalian</th> -->
                    <th>Kondisi Buku Saat Dipinjam</th>
                    <!-- <th>Kondisi Buku Saat Dikembalikan</th> -->
                    <th>Denda</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($data_peminjaman as $key => $p) {
                ?>
                    <tr>
                        <td><?= $key + 1 ?></td>
                        <td><?= $p["judul"] ?></td>
                        <td><?= $p["tanggal_peminjaman"] ?></td>
                        <td><?= $p["kondisi_buku_saat_dipinjam"] ?>
                    </td>
                        <td><?= $p["denda"] ?></td>
                        <td>
                            <a href="form_pengembalian.php?id_buku=<?= $p["id_buku"] ?>&id_peminjaman=<?= $p["id_peminjaman"] ?>">Kembalikan Buku</a>
                        </td>
                    </tr>
                <?php  } ?>
            </tbody>
        </table>
    </div>

    <?php include("../partials/b_script_js.php") ?>
</body>

</html>