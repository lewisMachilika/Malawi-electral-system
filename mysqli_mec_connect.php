<?php

    /*
	$conn = new mysqli('localhost', 'root', '', 'mec');
	
	if(!$conn){
		die("Error: Failed to connect to database");
	}*/

    $servername = "localhost";
	$username = "root";
	$password = "";
	$db = "mec";
	// Create connection
	$dbc = mysqli_connect($servername, $username, $password, $db);
	// Check connection
	if (!$dbc) {
	    echo 'Error creating database: ' . mysql_error();
	}

?>	