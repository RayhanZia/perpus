<?php

class Peminjaman extends Database
{

  public function findAll()
  {
    return $this->db->query("SELECT peminjaman.id as id_peminjaman, peminjaman.id_user, peminjaman.id_buku, buku.* FROM peminjaman, buku WHERE peminjaman.id_user = '$_SESSION[id]' AND buku.id = peminjaman.id_buku AND tanggal_pengembalian IS NULL")->fetch_all(MYSQLI_ASSOC);
  }

  public function pinjam($data)
  {
    $now = date('Y-m-d H:i:s');
    $this->db->query("INSERT INTO peminjaman (id_user, id_buku, tanggal_peminjaman, kondisi_buku_pinjam) VALUES('$_SESSION[id]', '$data[id_buku]', '$now', '$data[kondisi]')");
    header("location: peminjaman.php");
  }

  public function kembali($data)
  {
    $now = date('Y-m-d H:i:s');
    $this->db->query("UPDATE peminjaman SET tanggal_pengembalian = '$now', kondisi_buku_kembali = '$data[kondisi]' WHERE id = '$data[id_peminjaman]'");
    header("location: peminjaman.php");
  }
}
