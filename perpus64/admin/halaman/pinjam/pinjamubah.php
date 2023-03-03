<a href="index.php?page=pinjam">Kembali ke Data Peminjaman</a>
<br /><br />
<?php
    include "../koneksi.php";
    $idpinjam = $_GET['idpinjam'];
    
    $ambildata = mysqli_query($sambung, "select * from tbl_peminjaman where idpinjam='$idpinjam'");

    while ($tampildata = mysqli_fetch_array($ambildata)) {
?>
    <form action="halaman/buku/bukuubah_aksi.php" method="post" name="formubah">
        <table>
            <tr>
                <td>ID Peminjaman</td>
                <td><input type="text" name="idpinjam" value="<?php echo $tampildata['idpinjam'] ?>" readonly></td>
            </tr>

        <tr>
                <td><input type="submit" name="tombolubah" value="Ubah" onclick="return confirm('Apa Anda yakin akan mengubah data buku?'")></td>
        </tr>
        </table>
    </form>

<?php
}
?>
