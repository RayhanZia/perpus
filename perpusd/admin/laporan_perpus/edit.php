<?php
include_once("../../../class/Pesan.php");

$id = $_GET["id"];

$pesan = new Pesan;
$data_pesan = $pesan->find($id);

if(isset($_POST["submit"])){
    $data = [
        "penerima" => $_POST["penerima"],
        "judul_pesan" => $_POST["judul_pesan"],
        "isi_pesan" => $_POST["isi_pesan"],
        "status" => $_POST["status"],
        "tanggal_kirim" => $_POST["tanggal_kirim"],
        
    ];

    $pesan->update($id, $data);

    header(("location: index.php"));
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>From Edit Pesan</title>
</head>
<body>
    <div class="form">
        <form action="" method="post">
            <input type="hidden" disabled value="<?= $data_pesan["id"] ?>">
            <div>
                <label>Penerima</label>
                <input type="text" name="penerima" value="<?= $data_pesan["penerima"] ?>">
            </div>

            <div>
                <label>Pesan</label>
                <input type="text" name="judul_pesan" value="<?= $data_pesan["judul_pesan"] ?>">
            </div>

            <div>
                <label>Isi Pesan</label>
                <input type="text" name="isi_pesan" value="<?= $data_pesan["isi_pesan"] ?>">
            </div>

            <div>
                <label>Username</label>
                <input type="text" name="username" value="<?= $data_pesan["username"] ?>"> 
            </div>

            <div>
                <label>Status</label>
                <input type="text" name="status" value="<?= $data_pesan["status"] ?>"> 
            </div>

            <div>
                <label>Tanggal Kirim</label>
                <input type="text" name="tanggal_kirim" value="<?= $data_pesan["tanggal_kirim"] ?>">
            </div>


            <button type="submit" name="submit">Submit</button>
        </form>
    </div>
</body>
</html>