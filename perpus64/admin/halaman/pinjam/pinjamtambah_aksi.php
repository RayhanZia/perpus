<?php
    include "../../../koneksi.php";
    if(isset($_POST['tambah'])){
        $idpinjam     = $_POST['idpinjam'];
		$idpetugas    = $_POST['idpetugas'];
        $idsiswa      = $_POST['idsiswa'];
        $idbuku       = $_POST['idbuku'];

        $insert =   mysqli_query($sambung,"insert into tbl_peminjaman set idpinjam = '$idpinjam', idpetugas = '$idpetugas', idsiswa = '$idsiswa', idbuku = '$idbuku'");

        
    }
    header("location:../../index.php?page=pinjam");

?>