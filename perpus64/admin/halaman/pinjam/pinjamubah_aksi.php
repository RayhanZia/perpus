<?php 
    //koneksi dengan database 
    include '../../../koneksi.php'; 
    
    //menangkap data yang dikirim dari form dengan methode post 
    $idpinjam     =$_POST['idpinjam']; 
	$idpetugas    =$_POST['idpetugas']; 
    $idsiswa      =$_POST['idsiswa'];
    $idbuku       =$_POST['idbuku'];
    
    //update data dari database 
    mysqli_query($sambung,"update tbl_peminjaman set idpinjam='$idpinjam',idpetugas='$idpetugas',idsiswa='$idsiswa',idbuku='idbuku' where idpinjam='$idpinjam'"); 

    //mengalihkan ke halaman daftar buku 
    header("location:../../index.php?page=pinjam"); 
?>
