<!--HTML fitxategiaren estruktura nagusia beste fitxategi batetik inportatuko dugu-->
<?php 
	//Sesioa konprobatuko da beste php honetan, sesioa hasita badago ez gara logeatu beharko
	include "sesioaKonprobatu.php";
	logAtala();
	$title = "Sign Up";
	include "estruktura.php" 
?>
		<!--Fitxategi honetarako estiloa esleitu-->
		<link rel="stylesheet" href="CSS/estiloSignUp.css">
		<div class="signUp loga">
			<p>Sortu kontu berria</p>
			<form method="POST" name="signUp" action="signUp.php" onSubmit="signUp(izena, email, erabiltzailea, pasahitza, pasahitza2)">
				<input type="text" id="izena" class="inpName" name="izena" placeholder="Izena"/><br>
				<input type="email" id="email" class="inpEmail" name="email" placeholder="Email-a"/><br>
				<input type="text" id="erabiltzailea" class="inpUser" name="erabiltzailea" placeholder="Erabiltzailea"/><br>
				<input type="password" id="pasahitza" class="inpPass" name="pasahitza" placeholder="Pasahitza"/><br>
				<input type="password" id="pasahitza2" class="inpPass" name="pasahitza2" placeholder="Errepikatu pasahitza" /><br>
              	<div class="lower lowerS">
              		<input type="submit" value="Bidali" class="logBotoia">
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
					$irudia = addslashes(file_get_contents("../irudiak/user.png"));

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
<?php include "footer.php" ?>