<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "perpuszia";

$connect = mysqli_connect($hostname,$username,$password,$database);

// $connect->query("INSERT INTO `buku`(`judul`, `pengarang`, `penerbit`) VALUES ('Merdeka','sayuti_melik','soekarno')");
// $connect->query("UPDATE `buku` SET `judul`='kerja_paksa',`pengarang`='kaisar',`penerbit`='jepang' WHERE id_buku='8'");
// $connect->query("DELETE FROM `buku` WHERE id_buku='8'");

// $connect->query("INSERT INTO `buku`(`judul`, `pengarang`, `penerbit`) VALUES ('','value-2','value-3','value-4')");

