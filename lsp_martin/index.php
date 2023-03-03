<?php
include_once("class/User.php");
include_once("class/Login.php");

session_start();

$user = new User;

if (isset($_SESSION['id'])) {
    $data_user = $user->find($_SESSION['id']);
    if ($data_user['role'] == 'admin') {
        header("Location: admin/index.php");
    } elseif ($data_user['role'] == 'user') {
        header("Location: user/index.php");
    }
}

$login = new Login;
if (isset($_POST['submit'])) {
    $login->authLogin(
        [
            "username" => $_POST['username'],
            "password" => $_POST['password'],
        ]
    );
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="form-login">
        <form action="" method="post">
        <div>
            <label>Username</label>
            <input type="text" name="username">
        </div>

        <div>
            <label>Password</label>
            <input type="password" name="password">
        </div>
        <button class="but1"type="submit" name="submit">Login</button>
        <button class="but2"><a href="register.php" ></a>Register Akun</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>