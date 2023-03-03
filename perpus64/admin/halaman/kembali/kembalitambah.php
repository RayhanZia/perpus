<?php
    include "../koneksi.php";
?>

<form action="halaman/kembali/kembalitambah_aksi.php" method="post">
    <table>
        <tr>
            <td>ID kembali</td>
            <td>
                <input type="text" name="idkembali" placeholder="Masukan ID Peminjaman">
            </td>
        </tr>

        <tr>
            <td>id pinjam</td>
            <td>
                <select name="idpinjam" >
                    <option>Pilih id Pinjam</option>
                    <?php
                        $pinjam_query = mysqli_query($sambung,"select * from tbl_peminjaman");
                        while($pinjam_data = mysqli_fetch_array($pinjam_query))
                        {
                    ?>     
                        <option value="<?php echo $pinjam_data['idpinjam']?>">
                            <?php echo $pinjam_data['idpinjam']?>
                        </option>    
                    <?php
                        }
                    ?>
                </select>
            </td>
        </tr>

       

        <tr>
            <td></td>
            <td><input type="submit" name="tambah" value="Tambah Kembali"></td>
        </tr>
    </table>
</form>


