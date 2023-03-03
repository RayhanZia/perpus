<?php
session_start();

session_destroy();

header("location: ../../perpusd/index.php");

?>