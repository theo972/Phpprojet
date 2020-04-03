<?php
	/**
	* test functions to detect problems or confirm database linking
	*/
	$servername = "localhost";
	$username = "root";
	$password = "";

	try {
	    $conn = new PDO("mysql:host=" . $servername . ";dbname=test", $username, $password);   
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    echo "Connected successfully";
	    }
	catch(PDOException $e)
	    {
	    echo "Connection failed: " . $e->getMessage();
	    }
?>