<?php 
    //koneksi dengan database 
    include '../../../koneksi.php'; 
    
    //menangkap data yang dikirim dari form dengan methode post 
    $idsiswa     =$_POST['idsiswa']; 
	$nis   =$_POST['nis']; 
    $namasiswa      =$_POST['namasiswa'];
    $kelas  =$_POST['kelas']; 
    $alamat   =$_POST['alamat']; 
    $hp   =$_POST['hp'];
    //update data dari database 
    mysqli_query($sambung,"update tbl_siswa set nis='$nis',namasiswa='$namasiswa',kelas='$kelas',alamat='$alamat' where idsiswa='$idsiswa'"); 

    //mengalihkan ke halaman daftar siswa 
    header("location:../../index.php?page=siswa"); 
?>
