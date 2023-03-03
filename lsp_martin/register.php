<!DOCTYPE html>
<?php

    include("class/Database.php");
    include_once("class/Register.php");

    $user = new User;
    $data_user = $user->find('id'); 

    if(isset($_POST["submit"])){
        $data = [
            "kode" => $_POST["kode"],
            "nis" => $_POST["nis"],
            "fullname" => $_POST["fullname"],
            "username" => $_POST["username"],
            "password" => $_POST["password"],
            "kelas" => $_POST["kelas"],
            "alamat" => $_POST["alamat"],
            "role" => $_POST["role"],
           
        ];
    
        $user->createUser($data);
        header("Location: index.php");
    
        
}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BELAJAR REGISTER</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="card border-success mb-3" style="max-width: 18rem;">
            <div class="card-header">   
                <h4>INI HALAMAN REGISTER</h4>
            </div>
            <div class="card-body text-success">
                <form method="POST" action="">
                    <ul class="uli">
                        <li class="lir">Kode: <input type="kode" name="kode" id="" required></li>
                        <li class="lir">Nis: <input type="nis" name="nis" id="" required></li>
                        <li class="lir">fullname: <input type="text" name="fullname" id="" required></li>
                        <li class="lir">Username: <input type="username" name="username" id="" required></li>
                        <li class="lir">Password: <input type="password" name="password" id="" required></li>
                        <li class="lir">Kelas: <input type="kelas" name="kelas" id="" required></li>
                        <li class="lir">Alamat: <input type="text" name="alamat" id="" required></li>
                        <li class="lir">Role: User <select name="kondisi_buku_saat_dikembalikan">
                    <option disabled selected>Pilih Opsi</option>
                    <option value="user">user</option>     
                </select></li>
                        <li class="lir"><button class="lir1" type="submit" name="submit">Submit</button></li>
                    </ul>
                </form>
                <a href="index.php">KE HALAMAN LOGIN</a>

            </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</body>
</html>