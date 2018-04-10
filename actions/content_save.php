<?php
include("../assets/global_functions.php");
//Gosia, 03.31.2018: nHubID recognition code to be added later
$filePath = uploadFile("pic-upload");
$sql= insertRecord("INSERT INTO content (`nUserID`, `nHubID`, `strMedia`, `strTitle`, `strDescription`,`datePosted`)
                        VALUES('".$_POST["nUserID"]."',
                        '".$_POST["nHubID"]."',
                        '".$filePath."',
                        '".$_POST["pic-title"]."',
                        '".$_POST["pic-description"]."',
                        NOW()
                        )");

header("location: ../hub.php");
?>
