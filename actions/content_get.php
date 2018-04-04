<?php
include("../assets/global_functions.php");

// get content
$getContent = getRecords("SELECT strMedia, strTitle, strDescription FROM content WHERE nHubID = '".$nHubID."'");

header("location: ../index.php");
?>
