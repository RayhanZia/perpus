<?php

session_start();

include "../../class/Database.php";
include "../../class/Peminjaman.php";
include "../../class/Buku.php";
$peminjaman = new Peminjaman();
$buku       = new Buku();

$buku = $buku->findAll();
$data_peminjaman = $peminjaman->findAll();

if (!empty($_POST['pinjam'])) {
  $peminjaman->pinjam($_POST);
}

if (!empty($_POST['kembali'])) {
  $peminjaman->kembali($_POST);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <div style="display: flex;">
    <table border="1">
      <tr>
        <td>No.</td>
        <td>Judul</td>
        <td>Penerbit</td>
        <td>Pengarang</td>
        <td>Tahun</td>
        <td>ket</td>
      </tr>
      <?php
      $x = 1;
      foreach ($buku as $b) : ?>
        <tr>
          <td><?= $x++; ?></td>
          <td><?= $b['judul']; ?></td>
          <td><?= $b['id_penerbit']; ?></td>
          <td><?= $b['pengarang']; ?></td>
          <td><?= $b['tahun_terbit']; ?></td>
          <td>
            <form action="" method="POST">
              <input type="hidden" name="id_buku" value="<?= $b['id']; ?>">
              <input type="hidden" name="kondisi" value="baik">
              <input type="submit" name="pinjam" value="Pinjam">
            </form>
          </td>
        </tr>
      <?php endforeach; ?>
    </table>
    <table border="1px">
      <tr>
        <td>Peminjaman Buku</td>
      </tr>
      <tr>
        <td>No.</td>
        <td>Judul</td>
        <td>Penerbit</td>
        <td>Pengarang</td>
        <td>Tahun</td>
        <td>ket</td>
      </tr>
      <?php
      $x = 1;
      foreach ($data_peminjaman as $p) : ?>
        <tr>
          <td><?= $x++; ?></td>
          <td><?= $p['judul']; ?></td>
          <td><?= $p['id_penerbit']; ?></td>
          <td><?= $p['pengarang']; ?></td>
          <td><?= $p['tahun_terbit']; ?></td>
          <td>
            <form action="" method="POST">
              <input type="hidden" name="id_peminjaman" value="<?= $p['id_peminjaman']; ?>">
              <!-- <input type="hidden" name="kondisi" value="baik"> -->
              <select name="kondisi" id="">
                <option value="baik">Baik</option>
                <option value="rusak">Buruk</option>
                <option value="hilang">Hilang</option>
              </select>
              <input type="submit" name="kembali" value="Kembalikan">
            </form>
          </td>
        </tr>
      <?php endforeach ?>
    </table>
  </div>
</body>

</html>