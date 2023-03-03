<?php
    include "../../../koneksi.php";
    if(isset($_POST['tambah'])){
        $idkembali    = $_POST['idkembali'];
		$idpinjam   = $_POST['idpinjam'];
       

        $insert =   mysqli_query($sambung,"insert into kembali set idkembali = '$idkembali',  idpinjam = '$idpinjam'");

         $delete2 = mysqli_query($sambung,"delete from tbl_peminjaman where idpinjam='$idpinjam'");

        
    }
    header("location:../../index.php?page=kembali");

?>