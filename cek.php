<?php
	$servername = "localhost";
	$username = "username";
	$password = "password";
	$dbname = "book";
	$table = "booking_detail";

	//Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	//Check connection
	if (!$conn){
		die("Connection failed:" . mysqli_connect_error());
	}

	$sql = "
		SELECT count(*)
		FROM " . $table . "
		WHERE "
?>