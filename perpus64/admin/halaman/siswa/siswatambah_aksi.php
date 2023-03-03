<?php
    include "../../../koneksi.php";
    if(isset($_POST['tambah'])){
        $idsiswa     = $_POST['idsiswa'];
		$nis   = $_POST['nis'];
        $namasiswa      = $_POST['namasiswa'];
        $kelas  = $_POST['kelas'];
        $alamat   = $_POST['alamat'];
        $hp   = $_POST['hp'];
        
        mysqli_query($sambung,"insert into tbl_siswa (idsiswa,nis,namasiswa,kelas,alamat,hp) values ('$idsiswa','$nis','$namasiswa','$kelas','$alamat','$hp')");
    }
    header("location:../../index.php?page=siswa");
?>