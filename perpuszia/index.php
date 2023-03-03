<?php
include "connect.php";

if (!empty($_POST)) {
    // var_dump($_POST);
    $connect->query("INSERT INTO `buku`(`judul`, `pengarang`, `penerbit`) VALUES ('$_POST[judul]','$_POST[pengarang]','$_POST[penerbit]')");
}

$buku = $connect->query("select * from buku")->fetch_all(MYSQLI_ASSOC);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <form action="" method="POST">
        <label>Judul</label>
        <input type="text" name="judul">
        <label>Pengarang</label>
        <input type="text" name="pengarang">
        <label>Penerbit</label>
        <input type="text" name="penerbit">

        <input type="submit" name="Submit" value="submit">
    </form>

    <table border="1px">
        <tr>
            <td>Judul</td>
            <td>Pengarang</td>
            <td>Penerbit</td>
        </tr>
        <?php foreach ($buku as $b) : ?>
            <tr>
                <td><?= $b['judul'] ?></td>
                <td><?= $b['pengarang'] ?></td>
                <td><?= $b['penerbit'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>



</body>

</html>