<?php 
	$title = "Sing Up";
	include "estruktura.php" 
?>
		<div class="signin">
			<form method="POST" id="login" action="">
			Kontu berria sortu:<br>
			Izena:					<input type="text" id="izena" name="izena"/><br>
			Email-a:				<input type="text" id="email" name="email"/><br>
			Erabiltzailea:			<input type="text" id="erabiltzailea" name="erabiltzailea"/><br>
			Pasahitza:				<input type="password" id="pasahitza" name="pasahitza"/><br>
			Errepikatu pasahitza:	<input type="password" id="pasahitza" name="pasahitza"/><br>
			<input type="submit" value="Log in"/>
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
					$irudia = addslashes(file_get_contents("../irudiak/UserIcon.png"));
					date_default_timezone_set('	Europe/Madrid');
   					$data = date('Y-m-d H:i:s');

					if(baliostatuDatuak($erab, $izena, $email, $pasahitza)){
						$query = "INSERT INTO erabiltzailea VALUES ('$erab, '$izena', '$email', '$hash', '', 0, '$irudia','$data');";

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