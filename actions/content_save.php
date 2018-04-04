<?php
include("../assets/global_functions.php");
//Gosia, 03.31.2018: nHubID recognition code to be added later
$nHubID = $_GET['nHubID'];
$strHubName = $_GET['strHubName'];
$filePath = uploadFile("pic-upload");

$saveContent = insertRecord("INSERT INTO content (`nUserID`, `nHubID`, `strMedia`, `strTitle`, `strDescription`)
                        VALUES('".$_POST["nUserID"]."','".$_POST["nHubID"]."','".$filePath."','".$_POST["pic-title"]."','".$_POST["pic-description"]."')");

header("location: ../hub.php?nHubID=\".$nHubID.\"&strHubName=\".$strHubName");
?>
