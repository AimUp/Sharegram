<?php 
	//erabiltzailea pasatzean exekutatuko da. Datu basearekin konektatuz
	if(isset($_POST['erabiltzailea'])){ 
		include "connect.php";

		$erab = $_POST['erabiltzailea'];
		$izena = $_POST['izena'];
		$email = $_POST['email'];
		$pasahitza = $_POST['pasahitza'];
		//BCRYPT
		$hash = password_hash($pasahitza, PASSWORD_BCRYPT);
		$irudia = addslashes(file_get_contents("irudiak/user.png"));

		
		$query = "INSERT INTO erabiltzailea (`erabiltzailea`, `izena`, `email`, `pasahitza`) VALUES ('$erab', '$izena', '$email', '$hash');";

		if($conn->query($query) === TRUE) {
			echo "<h2>Datuak ondo sartu dira</h2> <br>";
			header("Location: index.php");
		}
		else{
			echo "<h2>Datuak ez dira sartu: " . $query . "</h2><br>" . $conn->error;
			header("Location: signUp.php");
		}
		
		$conn->close();	
	}
	else header("Location: signUp.php");
?>