<?php
	include "connect.php";

	$id = $_GET['id'];
	
	$query = "DELETE FROM irudia WHERE id='$id'";
	if($conn->query($query) === FALSE){
		echo "Datuak ez dira ezabatu: " . $conn->error;
	}
?>