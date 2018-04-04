<?php
include("../assets/global_functions.php");

if (isset($_POST['sign-in'])) {
	session_start();
	$arrFoundUser = getRecord("SELECT id FROM users WHERE strEmail='".$_POST["strEmail"]."' AND strPassword='".$_POST["strPassword"]."'");
	if($arrFoundUser) {
		$_SESSION["ss_usr_id"] = $arrFoundUser["id"];
		$isLoggedIn = true;
		header("location: ../myHubs.php");
		// echo "<p>Logged In</p>";
	}
	else {
		unset($_SESSION["ss_usr_id"]);
		header("location: ../login.php?error=true");
		// echo "<p>Login Error</p>";
	}
}
else {
	header("location: ../login.php?error=true");
	// echo "<p>Login Error</p>";
}
?>
