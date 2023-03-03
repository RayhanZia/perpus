<?php
    setlocale(LC_TIME, 'id_ID.utf8');
?>
<h3>
    <center>Laporan Stok siswa</center>
</h3>
<!--awal table-->
<table align="center" border="1">
    <!--awal header table-->
    <tr>
        <td width="5%" align="center">No</td>
        <td width="10%" align="center">ID siswa</td>
        <td width="10%" align="center">NIS</td>
        <td width="30%" align="center">Nama Siswa</td>
        <td width="10%" align="center">Kelas</td>
        <td width="25%" align="center">Alamat</td>
        <td width="25%" align="center">Nomer HP</td>
    </tr>
    <!--akhir header table-->

    <?php
        //koneksi ke database melalui koneksi.php
        include "../koneksi.php";
        
        //ambil data dari tabel tbl_siswa
        $ambildata     = mysqli_query($sambung,"SELECT * FROM tbl_siswa");
        $nomor =1;

        while ($tampildata = mysqli_fetch_array($ambildata)) {
    ?>

        <!--awal menampilkan data dari tabel siswa ke halaman web-->
        <tr>
            <td> <?php echo $nomor++?></td>
            <td> <?php echo $tampildata['idsiswa'] ?></td>
            <td> <?php echo $tampildata['nis'] ?>
            <td> <?php echo $tampildata['namasiswa'] ?></td>
            <td> <?php echo $tampildata['kelas']?></td>
            <td> <?php echo $tampildata['alamat']?></td>
            <td> <?php echo $tampildata['hp']?></td>
        </tr>
        <!--akhir menampilkan data dari tabel siswa ke halaman web-->

    <?php
        }
    ?>

<script>
        window.print();
    </script> 

</table> 
<br>
<?php
      $hariIni = new DateTime();
      echo strftime('Jakarta, %A %d %B %Y', $hariIni->getTimestamp()) . '<br>';
      echo "Petugas";
      echo "<br>";
      echo "<br>";
      echo "<br>";
      echo "<br>";
      echo "<br>";
      echo "Nama Pustakawan";
    ?>