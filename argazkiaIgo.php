<?php
	if(isset($_FILES['filer_input2'])){
		include "connect.php";

		$irudia = addslashes(file_get_contents($_FILES['filer_input2']['tmp_name']));
		$jabea = $_SESSION['erabiltzailea'];
		$deskripzioa = $_POST['deskripzioa'];

		$query = "INSERT INTO irudia (`deskripzioa`, `irudia`, `jabea`) VALUES ('$deskripzioa', '$irudia', '$jabea');";
		if($conn->query($query) === TRUE) {
			echo "<div id='mezua'><h2>Datuak ondo sartu dira</h2></div>";
			header("Location: profila.php");
			exit();
		}
		else{
			echo "<div id='errorea'><h2>Datuak ez dira sartu:</h2></div>" . $conn->error;
		}
		$conn->close();
	}
?>

