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

	function erabProfila($nick){
		session_start();
		if(isset($_SESSION['erabiltzailea'])){
			if(strcmp($_SESSION['erabiltzailea'],$nick) == 0){
				header("Location: profila.php");
			}
		}
		else{
			header("Location: index.php");
		}
	}
?>