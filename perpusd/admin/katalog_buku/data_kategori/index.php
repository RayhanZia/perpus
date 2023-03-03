<?php
include_once("../../../class/Kategori.php");
include_once("../../../class/User.php");

$user = new User;
$data_user = $user->find(1);

$kategori = new Kategori;
$data_kategori = $kategori->all()
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include("../../../partials/t_script_js.php") ?>
    <title>Data Kategori</title>
</head>
<tbody>
<?php include("../../../partials/sidebar_admin.php") ?>

    <div class="tambah">
        <a href="tambah.php">Tambah Anggota</a>
    </div>
    <div class="table">
    <table id="jquery-tab">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Kategori</th>
                <th>Aksi</th>
            </tr>
            </thead>

            <?php foreach($data_kategori as $key => $b) {?> 
              <tr>
                <td><?= $key +1 ?></td>
                <td><?= $b["nama"] ?></td>
                <td>
                    <a href="edit.php?id=<?= $b["id"] ?>">Edit</a> |
                    <a href="hapus.php?id=<?= $b["id"] ?>">Hapus</a>
                </td>
              </tr>  
            <?php } ?>
                <?php include("../../../partials/b_script_js.php") ?>
        </table>
    </div>
    <?php include("../../../partials/b_script_js.php") ?>
</tbody>
</html>