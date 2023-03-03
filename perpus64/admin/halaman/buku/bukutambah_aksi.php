<?php
    include "../../../koneksi.php";
    if(isset($_POST['tambah'])){
        $idbuku     = $_POST['idbuku'];
		$kodebuku   = $_POST['kodebuku'];
        $judul      = $_POST['judul'];
        $pengarang  = $_POST['pengarang'];
        $penerbit   = $_POST['penerbit'];
        
        mysqli_query($sambung,"insert into tbl_buku (idbuku,kodebuku,judul,pengarang,penerbit) values ('$idbuku','$kodebuku','$judul','$pengarang','$penerbit')");
        
    }
    header("location:../../index.php?page=buku");
?>