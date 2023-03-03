<?php
include_once("../../../class/User.php");
include_once("../../../class/Peminjaman.php");
session_start();

$user = new User;
$data_user = $user->find($_SESSION["id"]);

$peminjaman = new Peminjaman;
$data_peminjaman = $peminjaman->find($_SESSION["id"]);

if(isset($_POST["submit"])){
    $data = [
        "id_user" => $_POST["id_user"],
        "id_buku" => $_POST["id_buku"],
        "tanggal_peminjaman" => $_POST["tanggal_peminjaman"],
        "kondisi_buku_saat_dipinjam" => $_POST["kondisi_buku_saat_dipinjam"],
    ];

    $peminjaman->update($id, $data);

    header("location: index.php");
}

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Anggota</title>
</head>
<body>
    <?php include("../../../partials/sidebar_admin.php") ?>

    <div class="form">
        <form action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $data_user["id"] ?>">

            <div>
                <label>ID User</label>
                <input type="text" name="id_user" value="<?= $data_user["id_user"] ?>">
            </div>

            <div>
                <label>ID Buku</label>
                <input type="text" name="id_buku" value="<?= $data_user["id_buku"] ?>">
            </div>

            <div>
                <label>Tanggal Peminjaman</label>
                <input type="text" name="tanggal_peminjaman" value="<?= $data_user["tanggal_peminjaman"] ?>">
            </div>

            <div>
                <label>Kondisi Buku Saat Di Pinjam</label>
                <input type="text" name="kondisi_buku_saat_dipinjam" value="<?= $data_user["kondisi_buku_saat_dipinjam"] ?>">
            </div>

            <button type="submit" name="submit">Submit</button>
        </form>
    </div>
</body>
</html>