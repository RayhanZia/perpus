<?php
session_start();

session_destroy();

header("location: ../../lsp_martin/index.php");

?>