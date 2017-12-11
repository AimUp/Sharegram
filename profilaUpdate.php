<?php

	include "connect.php";
	if (isset($_POST['izena']) && $_POST['izena']!="") {
		$izena = $_POST['izena'];
		$query = "UPDATE erabiltzailea SET izena='$izena' WHERE erabiltzailea = '".$_SESSION['erabiltzailea']."';";
		$conn->query($query);	
	}
	if(isset($_POST['kokapena']) && $_POST['kokapena']!="") {
		$kokapena = $_POST['kokapena'];
		$query = "UPDATE erabiltzailea SET kokapena='$kokapena' WHERE erabiltzailea = '".$_SESSION['erabiltzailea']."';";
		$conn->query($query);	
	}
	if(isset($_FILES['img']['tmp_name']) && $_FILES['img']['tmp_name']!=""){
		$irudia = addslashes(file_get_contents($_FILES['img']['tmp_name']));
		$query = "UPDATE erabiltzailea SET irudia='$irudia' WHERE erabiltzailea = '".$_SESSION['erabiltzailea']."';";
		$conn->query($query);	
		echo $conn->error;
	}
	header("Location: ezarpenak.php");
	$conn->close();

?>