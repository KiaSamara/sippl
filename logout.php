<?php

session_start();
$_SESSION["username_akun"];
unset($_SESSION["username_akun"]);

session_unset();
session_destroy();

header("location: login.php");

?>