<?php
include_once("../../class/Pesan.php");

$id = $_GET["id"];

$pesan = new Pesan;
$pesan->delete($id);

header("location: index.php");
?>