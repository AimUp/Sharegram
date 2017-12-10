<?php 
	function logAtala(){
		session_start();
		if(isset($_SESSION['erabiltzailea'])){
			header("Location: feed.php");
		}
	}

	function erabiltzaileAtala(){
		session_start();
		if(!isset($_SESSION['erabiltzailea'])){
			header("Location: index.php");
		}
	}

?>