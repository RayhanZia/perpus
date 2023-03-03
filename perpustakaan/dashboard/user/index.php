<?php

include "../../class/Auth.php";
$auth = new Auth();

session_start();
$user_data = $auth->findUser($_SESSION['id']);

if (!empty($_POST)) {
  $auth->updateUser([$_POST, $_FILES]);
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
</head>

<body>
  <img src="../../img/<?= $user_data['foto']; ?>" alt="" height="100px" width="auto">
  <form action="" method="post" enctype="multipart/form-data">
    <table>
      <tr>
        <td>Username</td>
        <td><input type="text" value="<?= $user_data['username']; ?>" name="username"></td>
      </tr>
      <tr>
        <td>Fullname</td>
        <td><input type="text" value="<?= $user_data['fullname']; ?>" name="fullname"></td>
      </tr>
      <tr>
        <td>Kelas</td>
        <td><input type="text" value="<?= $user_data['kelas']; ?>" name="kelas"></td>
      </tr>
      <tr>
        <td>Alamat</td>
        <td><input type="text" value="<?= $user_data['alamat']; ?>" name="alamat"></td>
      </tr>
      <tr>
        <td>Foto</td>
        <td><input type="file" name="foto"></td>
      </tr>
      <tr>
        <td></td>
        <td><input type="submit" value="SAVE"></td>
      </tr>
    </table>
  </form>
</body>

</html>