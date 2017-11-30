<?php
	//LOCALHOST
	$servername = "localhost:3306";
	$username = "root";
	$password = "";
	$ddbb = "sharegram";
	
	//HOSTINGER
	$serverH = "mysql.hostinger.es";
	$userH = "";
	$passH = "";
	$ddbbH = "";
	
	//$conn = new mysqli($serverH, $userH, $passH, $ddbbH); //HOSTINGER
	
	//Konexioa konprobatu
	if ($conn->connect_error) {
		$conn = new mysqli($servername, $username, $password, $ddbb); //LOCALHOST
		if (!$conn) {
			die("Ezin izan da konexioa ezarri: " . $conn->connect_error);
		}
	}
	
	//Saioa hasi
	if (session_status() == PHP_SESSION_NONE) {
		session_start();
	}
?>