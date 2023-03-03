<h3>
    <center>Daftar Peminjaman Buku Perpustakaan</center>
</h3>
<p>
<h3>
    <center>SMK Negeri 64 Jakarta</center>
</h3>
<a href="index.php?page=kembalitambah">Tambah Kembali Buku</a>

<!--awal table-->
<table align="center" border="1">
    <!--awal header table-->
    <tr>
        <td width="5%" align="center">No</td>
        <td width="10%" align="center">ID Kembali</td>
         <td width="10%" align="center">ID pinjam</td>
        <td width="20%" align="center">Aksi</td>
    </tr>
    <!--akhir header table-->

    <?php
        //koneksi ke database melalui koneksi.php
        include "../koneksi.php";

        //menentukan banyak nya data yang akan ditampilkan dalam 1 halaman
        $batas   = 10; 
        $halaman = isset($_GET['halaman']) ? (int)$_GET['halaman']: 1;
        $mulai  = ($halaman > 1) ? ($halaman * $batas) - $batas: 0;
        
        //ambil data dari tabel tbl_peminjaman
        $ambildata1     = mysqli_query($sambung,"SELECT * FROM kembali INNER JOIN tbl_peminjaman ON kembali.idpinjam=tbl_peminjaman.idpinjam
        LIMIT $mulai, $batas");
        $ambildata2     = mysqli_query($sambung,"SELECT * FROM kembali INNER JOIN tbl_peminjaman ON kembali.idpinjam=tbl_peminjaman.idpinjam");
        $jumlahdata     = mysqli_num_rows($ambildata2);
        $jumlahhalaman  = ceil($jumlahdata / $batas);
        $nomor =$mulai+1;

        while ($tampildata = mysqli_fetch_array($ambildata1)) {
    ?>

        <!--awal menampilkan data dari tabel peminjaman ke halaman web-->
        <tr>
            <td> <?php echo $nomor++?></td>
            <td> <?php echo $tampildata['idkembali'] ?></td>
            <td> <?php echo $tampildata['idpinjam'] ?></td>
            
            <td align="center">
               
                <a href="halaman/kembali/kembalihapus.php?idkembali=<?php echo $tampildata['idkembali'];?>" onclick="return confirm('Apa Anda yakin akan menghapus Data Pengembalian?')">
                    Delete
                </a>
            </td>
        </tr>
        <!--akhir menampilkan data dari tabel buku ke halaman web-->

    <?php
        }
    ?>
</table>
<!--akhir table-->

<!--awal menentukan banyaknya halaman pagination-->
<?php
    $ambildata2 = mysqli_query($sambung, "select * from tbl_buku");
    $jumlahdata = mysqli_num_rows($ambildata2);
    $jumlahhalaman = ceil($jumlahdata/$batas);
?>
<!--akhir menentukan banyaknya halaman pagination-->

<p>

<!--awal navigasi pagination-->
<div align="center">
    <?php 
        for ($i=1; $i<=$jumlahhalaman; $i++) 
        { 
    ?>
        <a href="../admin/index.php?page=kembali&halaman=<?php echo $i; ?>"><?php echo $i; ?></a>

    <?php 
        } 
    ?>
</div>
<!--akhir navigasi pagination-->
