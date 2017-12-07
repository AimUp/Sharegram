<?php 
	$title = "Sign Up";
	include "estruktura.php" 
?>
		<link rel="stylesheet" href="CSS/estiloSignUp.css">
		<div class="signUp loga">
			<form method="POST" name="signUp" action="signUp.php">
				<label>Izena:</label>					<input type="text" id="izena" name="izena"/><br>
				<label>Email-a:</label>					<input type="email" id="email" name="email"/><br>
				<label>Erabiltzailea:</label>			<input type="text" id="erabiltzailea" name="erabiltzailea"/><br>
				<label>Pasahitza:</label>				<input type="password" id="pasahitza" name="pasahitza"/><br>
				<label>Errepikatu pasahitza:</label>	<input type="password" id="pasahitza" name="pasahitza"/><br>
              	<div class="lowerS">
              		<input type="submit" value="Bidali" class="signBotoia">
              	</div>
			</form>
			<?php 
				include "baliostapenak.php";
				include "connect.php";

				if(isset($_POST['erabiltzailea'])){ 
					$erab = $_POST['erabiltzailea'];
					$izena = $_POST['izena'];
					$email = $_POST['email'];
					$pasahitza = $_POST['pasahitza'];
					//BCRYPT
					$hash = password_hash($pasahitza, PASSWORD_BCRYPT);
					//$irudia = addslashes(file_get_contents("../irudiak/UserIcon.png"));

					if(baliostatuDatuak($erab, $izena, $email, $pasahitza)){
						$query = "INSERT INTO erabiltzailea (`erabiltzailea`, `izena`, `email`, `pasahitza`) VALUES ('$erab', '$izena', '$email', '$hash');";

						if($conn->query($query) === TRUE) {
							echo "<h2>Datuak ondo sartu dira</h2> <br>";
						}
						else{
							echo "<h2>Datuak ez dira sartu: " . $query . "</h2><br>" . $conn->error;
						}
					}
					else{
						echo "<h2>Datuak ezin izan dira balioztatu</h2><br>";
					}
					$conn->close();	
				}
			?>
		</div>
	</body>
</html>