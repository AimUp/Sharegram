<?php
	if(isset($_GET['nick'])){
		include "connect.php";
		$query = "INSERT INTO jarraitzen VALUES('".$_SESSION['erabiltzailea']."', '".$_GET['nick']."');";
		$erantzuna = $conn->query($query);
		if($conn->query($query) === TRUE) {
			
		}
		else{
			echo "<h2>Ezin izan da jarraitzeari utzi</h2>" . $conn->error;
		}
		$conn->close();
	}
?>