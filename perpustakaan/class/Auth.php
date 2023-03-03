<?php

include "Database.php";

class Auth extends Database
{
  public function login($data)
  {
    $user = $this->db->query("SELECT *FROM user WHERE username = '$data[username]' AND password = '$data[password]'")->fetch_array();

    if (!empty($user)) {

      session_start();
      $_SESSION['id'] = $user['id'];

      if ($user['role'] == 'user') {
        header('Location: dashboard/user');
      } else if ($user['role'] == 'admin') {
        header('Location: dashboard/admin');
      } else {
        echo "THIS PAGE IS FORBBIDEN";
      }
    } else {
      echo "USERNAME ATAU PASSWORD SALAH";
    }
  }

  public function findUser($id)
  {
    return $this->db->query("SELECT *FROM user WHERE id = '$id'")->fetch_array();
  }

  public function updateUser($data)
  {
    $fotonama = explode('.', $data[1]['foto']['name']);
    $fotonama = round(microtime(true)) . '_K.' . end($fotonama);

    move_uploaded_file($data[1]['foto']['tmp_name'], "../../img/" . $fotonama);

    $user = $data[0];
    $this->db->query("UPDATE user SET username = '$user[username]', fullname = '$user[fullname]', kelas = '$user[kelas]', alamat = '$user[alamat]', foto = '$fotonama' WHERE id = '$_SESSION[id]'");
    header("location: index.php");
  }
}
