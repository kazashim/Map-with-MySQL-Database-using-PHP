<?php
/*
|Author: Kazashim Kuzasuwat
|Email: Kazashim@cynojine.com
|Website: https://cynojine.com
*/
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "";
	
	$conn = mysqli_connect($servername, $username, $password, $dbname);

    // Create database --------------------------------------------------------
	$sql = "CREATE DATABASE location_db";

	if (mysqli_query($conn, $sql)) {
	    echo "Database created successfully<br>";
	} else {
	    echo "Error creating database: " . mysqli_error($conn) . "<br>";
    }
    
    