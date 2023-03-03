<!DOCTYPE html>
<html>
    <head>
        <title>Perpustakaan | SMK Negeri 64 Jakarta</title>
    </head>
    <body>
        <h2><center>Aplikasi Perpustakaan</center></h2>
        <h2><center>SMK Negeri 64 Jakarta</center></h2>
        <?php
            if(isset($_GET['pesan']))
            {
                if($_GET['pesan']=='gagal')
                {
                    echo '<script type ="text/JavaScript">';  
                    echo 'alert("Gagal Login, username atau password salah")';  
                    echo '</script>';  
                }
                else
                if($_GET['pesan']=='logout')
                {
                    echo '<script type ="text/JavaScript">';  
                    echo 'alert("Anda sudah logout")';  
                    echo '</script>';  
                }
                if($_GET['pesan']=='belum_login')
                {
                    echo '<script type ="text/JavaScript">';  
                    echo 'alert("Silahkan Login")';  
                    echo '</script>';
                }
            }
        ?>
        <form method="post" action="login_aksi.php" name="formlogin">
            <table align="center">
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="nama" placeholder="Masukan username"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="katakunci" placeholder="Masukan password"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="tombollogin" value="LOGIN"></td>
                </tr>
            </table>
        </form>
    </body>
</html>
