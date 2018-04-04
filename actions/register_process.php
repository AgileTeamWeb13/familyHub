<?php
include("../assets/global_functions.php");

session_start();

// create a new user
$myUserID = insertRecord("INSERT INTO users (`strName`, `strEmail`, `strPassword`)
                        VALUES('".$_POST["strName"]."','".$_POST["strEmail"]."','".$_POST["strPassword"]."')");

// log the user in

$_SESSION["ss_usr_id"] = $myUserID;

header("location: ../myHubs.php");
?>
