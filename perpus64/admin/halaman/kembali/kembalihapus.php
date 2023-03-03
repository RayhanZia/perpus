<?php
    //koneksikan dengan database
    include "../../../koneksi.php";

    //ambil idpinjam yang akan dihapus sebagai referensi
    $idkembali=$_GET['idkembali'];

    //query untuk menghapus data pinjam
    mysqli_query($sambung,"delete from kembali where idkembali='$idkembali'");

    //arahkan ke halaman data pinjam setelah menghapus 1 data pinjam
    header("location:../../index.php?page=kembali");
?>
