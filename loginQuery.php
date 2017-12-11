<?php 
	//Erabiltzailea lortzean datu basearekin konektatu eta erabiltzailea existitzen den begiratuko da
	if(isset($_POST['erabiltzailea'])){
		include "connect.php";
		$erabiltzailea = $_POST['erabiltzailea'];
		$pasahitza = $_POST['pasahitza'];
		$query = "SELECT pasahitza, admin, irudia FROM erabiltzailea WHERE erabiltzailea='$erabiltzailea'";
		$erantzuna = $conn->query($query);
		if ($erantzuna->num_rows > 0) {
			$lerroa = $erantzuna->fetch_assoc();
			//BCRYPT
		    if (password_verify($pasahitza, $lerroa["pasahitza"])) {
		    	$_SESSION['erabiltzailea'] = $erabiltzailea;
				$_SESSION['admin'] = $lerroa["pasahitza"];
				$_SESSION['irudia'] = base64_encode( $lerroa['irudia'] );
				header("Location: feed.php");
			}
			else{
				echo "<br/><br/><font color='red'>Erabiltzaile edo pasahitz okerra.</font>";
				header("Location: index.php");
			}
			echo "<br/><br/><font color='red'>Erabiltzaile edo pasahitz okerra.</font>";
			header("Location: index.php");
		}
		else{
			header("Location: index.php");
		}
		$conn->close();
	}
	else{
		header("Location: index.php");
	}
?>