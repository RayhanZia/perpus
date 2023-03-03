<?php

include_once("../../../class/Peminjaman.php");

if(isset($_POST["submit"])){
    $data = [
        "id_user" => $_POST["id_user"],
        "id_buku" => $_POST["id_buku"],
        "tanggal_peminjaman" => $_POST["tanggal_peminjaman"],
        "kondisi_buku_saat_dipinjam" => $_POST["kondisi_buku_saat_dipinjam"],
 
    ];

    $peminjaman = new Peminjaman;
    $peminjaman->create($data);

    header(("location: index.php"));
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Anggota</title>
</head>
<body>
    <div class="form">
        <form action="" method="post">
            <div>
                <label>ID User</label>
                <input type="text" name="id_user">
            </div>

            <div>
                <label>ID Buku</label>
                <input type="text" name="id_buku">
            </div>

            <div>
                <label>Tanggal Pinjam</label>
                <input type="date"  name="tanggal_peminjaman" value="<?= date("Y-m-d H:i:s") ?>">
            </div>

            <div>
                <label>Kondisi Buku Saat Dipinjam</label>
                <select name="kondisi_buku_saat_dipinjam">
                    <option disabled selected>Pilih Opsi</option>
                    <option value="baik">Baik</option>
                    <option value="rusak">Rusak</option>
                </select>

            </div>

           

            <button type="submit" name="submit">Submit</button>
        </form>
    </div>
</body>
</html>