<?php
    setlocale(LC_TIME, 'id_ID.utf8');
?>
<h3>
    <center>Laporan Stok Buku</center>
</h3>
<!--awal table-->
<table align="center" border="1">
    <!--awal header table-->
    <tr>
        <td width="5%" align="center">No</td>
        <td width="10%" align="center">ID Buku</td>
        <td width="10%" align="center">Kode Buku</td>
        <td width="30%" align="center">Judul</td>
        <td width="10%" align="center">Pengarang</td>
        <td width="25%" align="center">Penerbit</td>
    </tr>
    <!--akhir header table-->

    <?php
        //koneksi ke database melalui koneksi.php
        include "../koneksi.php";
        
        //ambil data dari tabel tbl_buku
        $ambildata     = mysqli_query($sambung,"SELECT * FROM tbl_buku");
        $nomor =1;

        while ($tampildata = mysqli_fetch_array($ambildata)) {
    ?>

        <!--awal menampilkan data dari tabel buku ke halaman web-->
        <tr>
            <td> <?php echo $nomor++?></td>
            <td> <?php echo $tampildata['idbuku'] ?></td>
            <td> <?php echo $tampildata['kodebuku'] ?>
            <td> <?php echo $tampildata['judul'] ?></td>
            <td> <?php echo $tampildata['pengarang']?></td>
            <td> <?php echo $tampildata['penerbit']?></td>
        </tr>
        <!--akhir menampilkan data dari tabel buku ke halaman web-->

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