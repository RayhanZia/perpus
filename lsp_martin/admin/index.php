<?php
session_start();
include_once("../class/User.php");
include_once("../class/Peminjaman.php");
include_once("../class/Buku.php");

$user = new User;
$data_user = $user->find($_SESSION['id']);

if (isset($_SESSION['id'])) {
    $data_user = $user->find($_SESSION['id']);
    if ($data_user['role'] == 'user') {
        header("Location: http://localhost/perpus/user/index.php");
    } 
}

$data_anggota = $user->getAnggota();

$buku = new Buku;
$data_buku = $buku->all();

$peminjaman = new Peminjaman;
$data_peminjaman = $peminjaman->getPeminjaman();
$data_pengembalian = $peminjaman->getPengembalian();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <link rel="stylesheet" href="admin.css">
    
</head>
<body>
    <?php include("../partials/sidebar_admin.php") ?>
<div class="row"></div>
    <div class="card" style="width: 18rem;">
        <img src="../assets/anggota.jpg" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">Total Anggota</h5>
        <h5><?= count($data_anggota) ?></h5>  </div>

        <div class="card" style="width: 18rem;">
        <img src="../assets/buku.jpg" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">Total Buku</h5>
        <h5><?= count($data_buku) ?></h5>  </div>

        <div class="card" style="width: 18rem;">
        <img src="../assets/peminjaman.jpg" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">Total Peminjam</h5>
        <h5><?= count($data_peminjaman) ?></h5>  </div>

        <div class="card" style="width: 18rem;">
        <img src="../assets/pengembalian.jpg" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">Total Dikembalikan</h5>
        <h5><?= count($data_pengembalian) ?></h5>  </div>
 
</div>

</div>
    <!-- <div class="container">
        <table border="1">
            <tr>
                <th>Data Anggota</th>
                <th>Data Buku</th>
                <th>Data Peminjaman</th>
                <th>Data Pembembalian</th>
            </tr>

            <tr>
                <td><?= count($data_anggota) ?></td>
                <td><?= count($data_buku) ?></td>
                <td><?= count($data_peminjaman) ?></td>
                <td><?= count($data_pengembalian) ?></td>
            </tr>
        </table>
    </div> -->
</body>
</html>