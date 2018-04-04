<?php
session_start();
unset($_SESSION["ss_usr_id"]);
$isLoggedIn = false;
header("location: ../login.php");

?>
