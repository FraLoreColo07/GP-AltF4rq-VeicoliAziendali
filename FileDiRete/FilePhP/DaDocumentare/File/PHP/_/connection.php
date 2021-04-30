<?php
	$servername = "altf4rq.altervista.org";
	$username = "altf4rq";
	$password = "";
	$dbname = "my_altf4rq";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}
?>