<?php
include_once("../../class/Pesan.php");
include_once("../../class/User.php");
include_once("../../class/Admin.php");
session_start();

$pesan = new Pesan;
$data_pesan = $pesan->all();

$user = new User;
$a = $user->find($_SESSION["id"]);
$data_user = $user->getAnggota();

$admin = new Admin;
$a = $admin->find($_SESSION["id"]);
$data_admin = $admin->getAdmin();

if (isset($_POST["submit"])) {
    $data = [
        "id_penerima" => $_POST["id_penerima"],
        "id_pengirim" => $_POST["id_pengirim"],
        "judul" => $_POST["judul"],
        "isi" => $_POST["isi"],
    ];

    $pesan->create($data);
    header("location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include("../../partials/t_script_js.php") ?>
    <title>Pesan</title>
</head>

<body>
<?php include("../../partials/sidebar_admin.php") ?>
<div class="form">
        <form action="" method="post">
            <div>
                <label>Penerima</label>
                <select name="id_penerima">
                    <?php foreach ($data_user as $u) : ?>
                        <option value="<?= $u["id"] ?>"><?= $u["username"]; ?> | <?= $u["role"]; ?></option>
                    <?php endforeach ?>
                </select>
            </div>

            <div>
                <label>Pengirim</label>
                <select name="id_pengirim">
                    <?php foreach ($data_admin as $p) : ?>
                        <option value="<?= $p["id"] ?>"><?= $p["username"]; ?> | <?= $p["role"]; ?></option>
                    <?php endforeach ?>
                </select>
            </div>

            <div>
                <label>Judul Pesan</label>
                <input type="text" name="judul">
            </div>

            <div>
                <label>Isi Pesan</label>
                <textarea type="text" name="isi"> </textarea>
            </div>

            <button type="submit" name="submit">Kirim Pesan</button>
        </form>
    </div>
    <div class="table">
        <h4>Data Pesan</h4>
        <table id="jquery-tab">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Penerima</th>
                    <th>Judul Pesan</th>
                    <th>Isi Pesan</th>
                    <th>Status</th>
                    <th>Tanggal Kirim</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($data_pesan as $key => $p) {
                ?>
                    <tr>
                        <td><?= $key + 1 ?></td>
                        <td><?= $p["fullname"] ?></td>
                        <td><?= $p["judul"] ?></td>
                        <td><?= $p["isi"] ?></td>
                        <td><?= $p["status"] ?></td>
                        <td><?= $p["tanggal_kirim"] ?></td>
                        <td>
                    <a href="edit.php">Edit</a> |
                    <a href="hapus.php">Hapus</a>
                </td>
                    </tr>
                <?php  } ?>
            </tbody>
        </table>
    </div>
    <?php include("../../partials/b_script_js.php") ?>
</body>

</html>