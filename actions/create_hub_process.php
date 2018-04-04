<?php
include '../assets/my_user.php';

session_start();

// create a new hub
$myHubID = insertRecord("INSERT INTO hubs (`strName`, `strDescription`)
                        VALUES('".$_POST["strName"]."', '".$_POST["strDescription"]."')");

// assign admin role
$myRoleID = insertRecord("INSERT INTO role (`strRole`)
                        VALUES('admin')");

// add user in  hub
$myUserInHubID = insertRecord("INSERT INTO usersInHubs (`nUserID`, `nHubID`, `nRoleID`)
                        VALUES('".$arrWhoAmI['id']."', '".$myHubID."', '".$myRoleID."')");

header("location: ../myHubs.php?hub_created=true");
?>
