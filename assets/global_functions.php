<?php

// mysqli_connect("192.185.103.171", "ashleyms_admin", "web13", "ashleyms_familyHub");

// Create a new DB
function createNewDB($dbName) {
	$conn = mysqli_connect('192.185.103.171', 'ashleyms_admin', 'web13');
	$result = false;
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	else {
		$sql = "CREATE DATABASE ".$dbName;
		if(mysqli_query($conn, $sql)) {
			// echo "Database created successfully";
			$result = true;
		}
		else {
			// echo "Error creating database: " . mysqli_error($conn);
			$result = false;
		}
	}
	mysqli_close($conn);
	return $result;
}


// Connect to an existing DB
function connectToDB() {
	$conn = mysqli_connect('192.185.103.171', 'ashleyms_admin', 'web13', 'ashleyms_familyHub');
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	else {
		return $conn;
	}
}


// Get multiple records
function getRecords($query) {
	$conn = connectToDB();
	$queryResult = mysqli_query($conn, $query);
    while( $rowArray = mysqli_fetch_assoc($queryResult)){
		$result[] = $rowArray;
	}
	mysqli_close($conn);
	if(!empty($result)) {
		return $result;
	}
	else {
		return null;
	}
}


// Get one record
function getRecord($query) {
	$conn = connectToDB();
	$queryResult = mysqli_query($conn, $query);
	while($row = mysqli_fetch_assoc($queryResult)){
		return $row;
	}
}


// Insert record and return ID
function insertRecord($query) {
	$conn = connectToDB();
	$result = mysqli_query($conn, $query);
	return mysqli_insert_id($conn);
}

// Remove record
function removeRecord($query) {
	$conn = connectToDB();
	$result = mysqli_query($conn, $query);
	return true;
}


// Update record
function updateRecord($query) {
	$conn = connectToDB();
	$result = mysqli_query($conn, $query);
	return true;
}


// Upload Picture

// function uploadFile($whichFile, $location) {
//     $name = $_FILES[$whichFile]["name"];
//     $tempFile = $_FILES[$whichFile]["tmp_name"];
//     move_uploaded_file($tempFile, $location."/".basename($name));
//     return $name;
// }

function uploadFile($whichFile) {
	$name = $_FILES[$whichFile]["name"];
	$tempFile = $_FILES[$whichFile]["tmp_name"];
	move_uploaded_file($tempFile, "../img/content/".$name);
	return $name;
}


?>
