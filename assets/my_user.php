<?php
	include("global_functions.php");
	session_start();
	$arrWhoAmI = getRecord("SELECT * FROM users WHERE id='".$_SESSION["ss_usr_id"]."'");
	if(!$arrWhoAmI) {
		header("location: login.php?error=true");
	}
?>
